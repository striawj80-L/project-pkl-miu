<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/product', 'product-dan-testimoni')->name('product');
Route::view('/about-us', 'about-us')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', ContactController::class)
    ->middleware('throttle:5,1')
    ->name('contact.send');
