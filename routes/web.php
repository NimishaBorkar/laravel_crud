<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductController;


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
Route::resource('projects', ProjectController::class);
Route::resource('products', ProductController::class);
//Route::get("products",[ProductController::class,'index']);
Route::get("products/create",[ProductController::class,'create']); 
Route::post("products/store",[ProductController::class,'store']); 
Route::get("products/edit/{id}",[ProductController::class,'edit']); 
Route::post("products/update/{id}",[ProductController::class,'update']);
Route::post("products/destroy/{id}",[ProductController::class,'destroy']); 


//Route::resource('products','ProductController@index');
//Route::get('/db','UserController@index');