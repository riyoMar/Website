<?php

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
route::view('/', 'home');
// Route::view('/', 'home_2');

Route::view('home', 'home_2');
Route::view('home-1', 'home');
Route::view('product', 'product_3');
Route::view('product-1', 'product');
Route::view('product-2', 'product_2');
Route::view('product-4', 'product_4');
Route::view('support', 'support');
Route::view('view-details', 'viewDetails');
