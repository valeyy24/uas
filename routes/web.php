<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Auth::routes();

// Route for home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Resource routes for ProductController
Route::resource('products', ProductController::class);

// Redirect root URL to products
Route::get('/', function () {
    return redirect()->route('products.index');
});


