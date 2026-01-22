<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'books.index')->name('home');

// register routes
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

//login routes
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

//logout routes
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
