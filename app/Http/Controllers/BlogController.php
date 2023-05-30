<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel;
use App\Models\CartModel;
use App\Models\userCreateModel;
use App\Models\ordering;
use App\Models\OrderProductModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function blog()
    {
        $count='0';
        $userData = userCreateModel::where('id', '=', session('loggedUser'))->first();
        // $latest = ProductsModel::latest();
        // $count = DB::table('cart_models')->where('UserId', '=', $userData)->get('Product_id')->count();
        // $count = cartModel::where('UserId',   $userData->id)->get('Product_id')->count();
        // dd( $userData);
        if($userData){
        $count = cartModel::where('UserId',   $userData->id)->get('Product_id')->count();
            
        }
        
        $Products = ProductsModel::latest()->filter(request(['search']))->get();
       return view('blog.index')->with([
           'Products'=>$Products,
           'userData'=>$userData,
           'count'=>$count,
        //    'latest'=>$latest
        'latest'=>DB::select('select * from products_models limit ?', [3]),
        
       ]);
    }
    public function BlogLayout()
    {
        $userData = userCreateModel::where('id', '=', session('loggedUser'))->first();
        $count = DB::table('cart_models')->where('UserId', '=', $userData)->get('Product_id')->count();
       return view('bloglayout.bloglayout')->with([
           'userData'=>$userData,
           'count'=>$count,
        'latest'=>DB::select('select * from products_models limit ?', [3]),
           
       ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function OrderUser()
    {
        $userData = userCreateModel::where('id', '=', session('loggedUser'))->first();
        
        $order = Ordering::where('User_id', $userData->id)->get();
        // dd($order);
       
        // find($order->id);
        // $newOrder = OrderProductModel::where('Order_id',  $order->User_id)->get();
        // dd($newOrder);
        
        return view(
            'users.order'
        )->with([
            'order'=>$order,
            'userData'=>$userData
        ]);
    }

    public function ViewOrder($id)
    {
        $userData = userCreateModel::where('id', '=', session('loggedUser'))->first();
        $user = session('loggedUser');
        
        $order = Ordering::where('User_id', $userData->id)->where('id', $id)->get();
        if($order){

            return view(
                'users.view-order'
            )->with([
                'order'=>$order,
                'userData'=>$userData
            ]);
        }else{
            return redirect()->back()->with('message', 'No Order Found');
        }
    }

    public function OrderAdmin()
    {
        $userData = userCreateModel::where('id', '=', session('loggedUser'))->first();
        $todayDate = Carbon::now();
// dd($todayDate);
        $orders = Ordering::whereDate('created_at', $todayDate)->paginate(3);
        // $order = OrderProductModel::all();
        // foreach($order as $k=>$v){
        //     // dd($k);
        //     $product = ProductsModel::where('id',  $v->Product_id)->get();
        //     dd($product->id);
        // }

        
        
        return view(
            'admin.order'
        )->with([
            'orders'=>$orders,
            'userData'=>$userData
        ]);
    }


    public function adminviewOrder( $id){
        $userData = userCreateModel::where('id', '=', session('loggedUser'))->first();
        
        $order = Ordering::where('id', $id)->first();
        if($order){
            return view('admin.admin-view')->with([
                'order'=>$order,
                'userData'=>$userData
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function OrderedProducts(Request $request)
    {
        $userData = userCreateModel::where('id', '=', session('loggedUser'))->first();
        
        $tracking_id = rand(0, 999999);
        $Pending = 'Pending';
        // dd($tracking_id);
        
        $order = ordering::create([
            'User_id'=>$userData->id,
            'Address1'=>$request->input('address'),
            'Address2'=>$request->input('address2'),
            'Country'=>$request->input('country'),
            'Zip'=>$request->input('zip'),
            'Fullname'=>$request->input('name'),
            'Email'=>$request->input('email'),
            'Tracking_id'=>$tracking_id,
            'Status'=>$Pending,
            'Fone'=>$request->input('fone')
        ]);

        $cartItem = CartModel::where('UserId', '=', $userData->id)->get();
            foreach($cartItem as $item){
                OrderProductModel::create([
                    'Order_id'=>$order->id,
                    'User_id'=>$userData->id,
                    'Product_id'=>$item->Product_id,
                    'Quantity'=>$item->Quantity
                ]);

                $prod = ProductsModel::where('id', $item->Product_id);
                $prod->Quantity = $prod->Quantity - $item->Quantity;
                $prod->update();
        $cartItem = CartModel::where('UserId', '=', $userData->id)->get();
        CartModel::destroy($cartItem);
                return back()->with('good', 'Thanks For Placing Your Order');
                
            }
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $count='0';
        $userData = userCreateModel::where('id', '=', session('loggedUser'))->first();
        $Product=ProductsModel::find($id);
        if($userData){
            $count = cartModel::where('UserId', '=', $userData->id)->get('Product_id')->count();
        }
        
        return view('blog.product_page')->with([
            'Product'=>$Product,
            'userData'=>$userData,
            'count'=>$count,
        'latest'=>DB::select('select * from products_models limit ?', [3]),
            
        ]);
    }

    public function checkOutPage()
    {
        $userData=  session('loggedUser');
      $user =  userCreateModel::where('id', '=', session('loggedUser'))->first();
        // dd($user);
        $checkOut =  CartModel::with(['ProductsModels'=>function($query){
            $query->select('id', 'Description', 'DogName', 'Color', 'Quantity', 'DogType', 'Price', 'Image');
        }])->where('UserId',  $userData)->get()->toArray();
        // dd($checkOut);
        // $count = $checkOut->count();
        $count = DB::table('cart_models')->where('UserId', '=', $userData)->get('Product_id')->count();
        
       return view('blog.check-out')->with([
           'checkOut'=>$checkOut,
           'count'=>$count,
        'latest'=>DB::select('select * from products_models limit ?', [3]),
        'user'=>$user
           
       ]);
    }

    public function cartPage()
    {
        $userData = userCreateModel::where('id', '=', session('loggedUser'))->first();
        $showCarts = CartModel::with(['ProductsModels'=>function($query){
            $query->select('id', 'Description', 'DogName', 'Color', 'Quantity', 'DogType', 'Price', 'Image');
        }])->where('UserId',  $userData->id)->get()->toArray();
        $count = DB::table('cart_models')->where('UserId', '=', $userData->id)->get('Product_id')->count();
        return view('blog.cart')->with([
            'showCarts'=>$showCarts,
            'userData'=>$userData,
            'count'=>$count,
        'latest'=>DB::select('select * from products_models limit ?', [3]),
            

        ]);;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
