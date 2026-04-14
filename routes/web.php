<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Stub routes for auth links
Route::get('/login', function () {
    return 'Login Page';
})->name('login');

Route::get('/register', function () {
    return 'Register Page';
})->name('register');
