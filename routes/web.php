<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', ContactController::class)
    ->middleware('throttle:5,1')
    ->name('contact.send');
