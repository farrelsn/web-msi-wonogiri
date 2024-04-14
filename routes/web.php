<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

// Profil
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/profil#pengurus')->name('pengurus');

// Kontak Kami
Route::get('/kontak-kami', [ContactController::class,'index'])->name('kontak-kami');

// Admin
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('admin');

    // Berita
    Route::get('/daftar-berita', [BeritaController::class, 'daftar'])->name('admin.daftar-berita');

    // Pengurus
    Route::get('/daftar-pengurus', [PengurusController::class, 'daftar'])->name('admin.daftar-pengurus');

    // Pesan
    Route::get('/daftar-pesan', [PesanController::class, 'daftar'])->name('admin.daftar-pesan');

});