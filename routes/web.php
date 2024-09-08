<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// Resource route for products
//Route::resource('products', ProductController::class)->middleware('auth'); to auth all 

Route::resource('products', ProductController::class);

// Default route for the welcome page
Route::get('/', function () {
    return redirect()->route('products.index'); 
   
});

Route::get('/home', function () {
    return redirect()->route('products.index'); 
   
});

// Authentication routes
Auth::routes();

// Home route
//Route::get('/home', [HomeController::class, 'index'])->name('home');



