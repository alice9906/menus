<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/photos', 'photos')->name('photos');
Route::view('/contact', 'contact')->name('contact');
