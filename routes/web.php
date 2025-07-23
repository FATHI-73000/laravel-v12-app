<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/cart', function(){

    return view ('panier');
});

Route::get('/Product', [ProductController::class, 'index']); 
Route::get('/Product/{id}', [ProductController::class, 'show']);


