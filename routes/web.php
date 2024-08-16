<?php

use App\Http\Controllers\productController;
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
Route::view("/admin-dashboard",'admin.dashboard');
Route::view("/admin-add-product",'admin.add-product');
Route::view("/admin-view-product",'admin.view-product');



Route::post('/add-product',[productController::class,'addProduct']);