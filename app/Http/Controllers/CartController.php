<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use App\Models\CartModel;
use App\Models\userCreateModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function storeCart(Request $request)
    { 
    // $productId=$request->proId;
        // dd($productId);
    
    // $userId=$request->userId;
    $DogName=$request->DogName;
    $userData = userCreateModel::where('id', '=', session('loggedUser'))->first();
    // $id =$userData->id;
    // dd($id);
    if(!$userData){
        return response()->json([
            "status"=>"success",
            "message"=>"You are not logged in"
        ]);
        
    }else{
        $alreadyInCart = DB::table('cart_models')->select('Product_id')->where('UserId','=', $userData->id)->get();
        // exists();
        // dd($alreadyInCart);
    $productQty=$request->qty;
        if($productQty <1){
            // return back()->with('msg', 'Product Quantity should not be less than 1');
            return response()->json([
                "status"=>"success",
                "message"=>"Product Quantity should not be less than 1"
            ]);
            
        }
        // if($alreadyInCart-> has($request->proId)){
        //     // return back()->with('msg','it means that this product is not ion ypur cart'); 
        //     return response()->json([
        //         "status"=>"success",
        //         "message"=>"Product already in cart"
        //     ]);           
        // }
        else{
            CartModel::create([
                'UserId'=>$userData->id,
                'Product_id' =>$request->input('proId'),
                'Quantity'  =>$request->input('qty')     
            ]);
            return response()->json([
                "status"=>"success",
                "message"=>"{$DogName} Added to your Cart"
            ]);
        }
    }
        
        
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
