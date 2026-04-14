<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Stub routes for auth links
Route::get('/login', function () {
    return 'Login Page';
})->name('login');

Route::get('/register', function () {
    return 'Register Page';
})->name('register');
