<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('/profile', [UserController::class, 'showProfile'])->name('showProfile');
Route::get('/admin', [AdminController::class, 'showAdmin'])->name('showAdmin');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/halls', [AdminController::class, 'showHalls'])->name('showHalls');
Route::post('halls', [AdminController::class, 'index'])->name('halls.index');
Route::get('halls/halls', [HallController::class, 'indexHall'])->name('indexHall');
Route::get('/halls/create', [HallController::class, 'createHall'])->name('createHall');
Route::get('/halls', [HallController::class, 'storeHall'])->name('storeHall');

Route::get('admin/genres', [AdminController::class, 'showGenres'])->name('showGenres');
Route::post('genres', [AdminController::class, 'genres'])->name('genres');

Route::get('admin/movies', [AdminController::class, 'showMovies'])->name('showMovies');
Route::post('movies', [AdminController::class, 'movies'])->name('movies');

