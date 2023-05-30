<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserCreationController;
use  App\Http\Controllers\ProductsController;
use  App\Http\Controllers\BlogController;
use  App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BlogController::class, 'blog']);

Route::get('/register', [UserCreationController::class, 'register']);
Route::get('/login', [UserCreationController::class, 'login']);
Route::get('/', [BlogController::class, 'blog']);
Route::get('/logout', [UserCreationController::class, 'Logout']);
Route::post('/register', [UserCreationController::class, 'store']);
Route::post('/login', [UserCreationController::class, 'ValidateLogin']);

Route::get('/product/{id}', [BlogController::class, 'show']);

    Route::post('/add_to_cart', [CartController::class, 'storeCart']);
    Route::post('/order', [BlogController::class, 'OrderedProducts']);

Route::group(['middleware'=>['cartMiddlleWare']], function(){
    Route::get('/cart', [BlogController::class, 'cartPage']);
    Route::get('/my-order', [BlogController::class, 'OrderUser']);
    Route::get('/order', [BlogController::class, 'OrderAdmin']);
    Route::get('/view-order/{id}', [BlogController::class, 'ViewOrder']);
    Route::get('/dashboard', [UserCreationController::class, 'index']);
Route::get('/admin/dashboard', [UserCreationController::class, 'adminDashboard']);
    Route::get('/checkout', [BlogController::class, 'checkOutPage']);
    Route::get('/admin-view/{id}', [BlogController::class, 'adminviewOrder']);
    Route::get('/edit/{id}', [UserCreationController::class, 'editAdmin']);
    Route::get('/edit_user/{id}', [UserCreationController::class, 'editUser']);
    Route::get('/add_products', [ProductsController::class, 'AddProducts']);
    Route::post('/add_products', [ProductsController::class, 'storeProducts']);
    // Route::post('/add_to_cart', [CartController::class, 'storeCart']);
    Route::get('/view_products', [ProductsController::class, 'view_products']);
    Route::get('/edit_product/{id}', [ProductsController::class, 'editProduct']);
    Route::put('/updateproduct/{id}', [ProductsController::class, 'updateProduct']);
    Route::put('/edit/{id}', [UserCreationController::class, 'update']);
Route::delete('/delete/{id}', [ProductsController::class, 'destroyProduct']);
});
