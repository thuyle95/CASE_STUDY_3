<?php
use Illuminate\Support\Facades\Route;

Route::resource('admin', \App\Http\Controllers\AdminProductController::class);
Route::resource('product',\App\Http\Controllers\AdminProductController::class);
Route::resource('category', \App\Http\Controllers\AdminCategoryController::class);
Route::resource('order', \App\Http\Controllers\AdminOrderController::class);
Route::resource('user', \App\Http\Controllers\AdminUserController::class);

Route::resource('home', \App\Http\Controllers\ProductController::class);
Route::resource('product', \App\Http\Controllers\HomeController::class);

Route::get('/products', [\App\Http\Controllers\HomeController::class, 'getProduct']);
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index']);

