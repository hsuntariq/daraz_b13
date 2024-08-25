<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\salesController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// admin routes
Route::view("/admin-dashboard",'admin.dashboard')->middleware(['auth','admin']);
Route::view("/admin-add-product",'admin.add-product')->middleware(['auth','admin']);
Route::view("/admin-add-sale",'admin.add-sale')->middleware(['auth','admin']);
Route::view("/admin-add-category",'admin.add-category')->middleware(['auth','admin']);
Route::view("/admin-view-products",'admin.view-products')->middleware(['auth','admin']);
Route::view("/admin-view-category",'admin.view-category')->middleware(['auth','admin']);
Route::view("/sign-up",'signup');
Route::view("/login",'login');
Route::view("/cart",'users.cart');




Route::post('/add-product',[productController::class,'addProduct'])->middleware(['auth','admin']);
Route::post('/add-sale',[salesController::class,'addSale'])->middleware(['auth','admin']);
Route::post('/add-category',[categoryController::class,'addCategory'])->middleware(['auth','admin']);
Route::post('/signup',[userController::class,'signUP']);
Route::post('/logout',[userController::class,'logout']);
Route::post('/login',[userController::class,'login'])->name('log');
Route::post('/delete/{id}',[productController::class,'deleteProduct'])->middleware(['auth','admin']);
Route::post('/add-to-cart',[cartController::class,'addToCart'])->middleware(['auth']);
Route::post('/delete-cart/{id}',[cartController::class,'deleteCartData']);
Route::post('/update-quantity/{id}',[cartController::class,'updateQuantity']);


Route::get('/',[productController::class,'getData']);
Route::get('/admin-add-product',[categoryController::class,'getCategory'])->middleware(['auth','admin']);
Route::get('/admin-view-category',[categoryController::class,'getCategories'])->middleware(['auth','admin']);
Route::get('/admin-view-products',[productController::class,'getProducts'])->middleware(['auth','admin']);
Route::get('/get-cart-data',[cartController::class,'getCartData']);
Route::get('/cart',[cartController::class,'getMyCart'])->middleware('auth');