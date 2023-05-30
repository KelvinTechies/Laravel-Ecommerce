<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userCreateModel;
use App\Models\ProductsModel;
use App\Models\ImageModel;
use File;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AddProducts()
    {
        $userData = userCreateModel::where('id', '=', session('loggedUser'))->first();
        
       return view('Products.add_products')->with([
        'userData'=>$userData
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function view_products()
    {
        $userData=usercreateModel::where('id', '=', session('loggedUser'))->first();
        $Products=ProductsModel::all();
        return view('Products.View_products')->with([
            'userData'=>$userData,
            'Products'=>$Products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeProducts(Request $request)
    {
        $file;
        $finalProductsFormUpdate=$request->validate([
            'dogName'=>'required|string',
            'dogBreed'=>'required|string',
            'dogDescription'=>'required|string',
            'dogColor'=>'required|string',
            'dogType'=>'required|string',
            'dogQuantity'=>'required|numeric',
            'dogPrice'=>'required|numeric',
            'coverimage'=>'required',
        ]);
if($request->hasFile('coverimage')){
    $file = $request->file('coverimage');
    $imagename = time().'-'.$file->getClientOriginalName();
    $file->move(\public_path('cover'), $imagename);
  $product =   ProductsModel::create([
        'DogName'=>$request->input('dogName'),
        'Breed'=>$request->input('dogBreed'),
        'Color'=>$request->input('dogColor'),
        'Quantity'=>$request->input('dogQuantity'),
        'DogType'=>$request->input('dogType'),
        'Price'=>$request->input('dogPrice'),
        'Image'=>$imagename,
        'Description'=>$request->input('dogDescription')
     ]);
}

if($request->hasFile('images')){
    $files = $request->file('images');
    // $files->move(\public_path('cover'), $imagename);
    foreach($files as $file){
        $imagename = time().'-'.$file->getClientOriginalName();
        // $request['Image']= $imagename;
        // $request['Product_id']= $product->id;
      $file->move(\public_path('images'), $imagename);
$img=    ImageModel::create([
    'Product_id'=>$product->id,
    'Image'=>$imagename,
    ]
);
        // dd($img);
    }
}

    // ProductsModel::create([
    //     'DogName'=>$request->input('dogName'),
    //     'Breed'=>$request->input('dogBreed'),
    //     'Color'=>$request->input('dogColor'),
    //     'Quantity'=>$request->input('dogQuantity'),
    //     'DogType'=>$request->input('dogType'),
    //     'Price'=>$request->input('dogPrice'),
    //     'Image'=>implode('|', $image),
    //     'Description'=>$request->input('dogDescription')
    //  ]);

        return redirect('/view_products');
    // dd($saveProducts);
        
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
    public function editProduct(string $id)
    {
       $product=ProductsModel::find($id);
        $userData=usercreateModel::where('id', '=', session('loggedUser'))->first();
    
       return view('Products.edit_product')->with([
           'product'=>$product,
           'userData'=>$userData
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProduct(Request $request, string $id)
    {
$product=ProductsModel::find($id);
if($request->hasFile('coverimage')){
    if(File::exists('cover/'.$product->Image)){
        File::delete('cover/'.$product->Image);
    }
    $file = $request->file('coverimage');
    $product->Image = time().'='.$file->getClientOriginalName();
    $file->move(\public_path('/cover'), $product->Image);
    $product->update([
        'DogName'=>$request->input('dogName'),
        'Breed'=>$request->input('dogBreed'),
        'Color'=>$request->input('dogColor'),
        'Quantity'=>$request->input('dogQuantity'),
        'DogType'=>$request->input('dogType'),
        'Price'=>$request->input('dogPrice'),
        'Image'=>$product->Image,
        'Description'=>$request->input('dogDescription')
    ]);

    if($request->hasFile('images')){
        $files = $request->file('images');
        foreach($files as $file){
            $imagename = time().'-'.$file->getClientOriginalName();
            $request['Product_id']=$id;
            $request['Image']=$imagename;
            $file->move(\public_path('Images'), $imagename);
         $im =    ImageModel::create($request->all());
        //  dd($im->Image);
        }
    }
}
// $file;
//         $finalProductsFormUpdate=$request->validate([
//             'dogName'=>'required|string',
//             'dogBreed'=>'required|string',
//             'dogDescription'=>'required|string',
//             'dogColor'=>'required|string',
//             'dogType'=>'required|string',
//             'dogQuantity'=>'required|numeric',
//             'dogPrice'=>'required|numeric',
//             'coverimage'=>'required',
//         ]);

// if($request->hasFile('coverimage')){
//     $file = $request->file('coverimage');
//     $imagename = time().'-'.$file->getClientOriginalName();
//     $file->move(\public_path('cover'), $imagename);
//     $product =      ProductsModel::where('id', $t)->update([
        // 'DogName'=>$request->input('dogName'),
        // 'Breed'=>$request->input('dogBreed'),
        // 'Color'=>$request->input('dogColor'),
        // 'Quantity'=>$request->input('dogQuantity'),
        // 'DogType'=>$request->input('dogType'),
        // 'Price'=>$request->input('dogPrice'),
        // 'Image'=>$imagename,
        // 'Description'=>$request->input('dogDescription')
        
//     ]);
    
// }
//             if($request->hasFile('images')){
//                 $files = $request->file('images');
//                 // $files->move(\public_path('cover'), $imagename);
//                 foreach($files as $file){
//                     $imagename = time().'-'.$file->getClientOriginalName();
//                     $request['Image']= $imagename;
//                     $request['Product_id']= $id;
//                   $file->move(\public_path('images'), $imagename);
//         $img=ImageModel::create($request->all());
//                     dd($img->Image);
//                 }
//             }
    return redirect('/view_products')->with('success', 'Product updated Successfully');
        
    }
    



    /**
     * Remove the specified resource from storage.
     */
    public function destroyProduct(string $id)
    {
        $product=ProductsModel::find($id);
        if(File::exists('cover/'.$product->Image)){
            File::delete('cover/'.$product->Image);
        }

        $images=ImageModel::where('Product_id', $product->id)->get();
        foreach($images as $image){
            if(File::exists('images/'.$image->Image)){
                File::delete('images/'.$image->Image);
            }
        }
        $product->delete();

        return redirect('/view_products')->with('success', 'Product has been Deleted');
    }
}
