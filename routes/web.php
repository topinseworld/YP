<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('/profile', [UserController::class, 'showProfile'])->name('showProfile');
Route::get('/admin', [AdminController::class, 'showAdmin'])->name('showAdmin');

Route::post('logout', [UserController::class, 'logout'])->name('logout');

