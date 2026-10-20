<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductVideoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/product', 'product-dan-testimoni')->name('product');
Route::get('/media/product/it-inventory-demo', ProductVideoController::class)->name('product.video');
Route::view('/about-us', 'about-us')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', ContactController::class)
    ->middleware('throttle:5,1')
    ->name('contact.send');
