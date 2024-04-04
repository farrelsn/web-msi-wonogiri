<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Berita
Route::get('/berita')->name('berita');

// Profil
Route::get('/profil')->name('profil');
Route::get('/profil#pengurus')->name('pengurus');

// Kontak Kami
Route::get('/kontak-kami')->name('kontak-kami');

// Admin

Route::group(['middleware', ['auth']], function (){
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin');
});