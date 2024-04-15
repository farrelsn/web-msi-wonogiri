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
Route::post('/kontak-kami', [ContactController::class, 'store'])->name('kontak-kami.store');

// Admin
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('admin');

    // Berita
    Route::get('/daftar-berita', [BeritaController::class, 'daftar'])->name('admin.daftar-berita');

    // Pengurus
    Route::get('/daftar-pengurus', [PengurusController::class, 'daftar'])->name('admin.daftar-pengurus');
    Route::get('/daftar-pengurus/tambah', [PengurusController::class, 'create'])->name('admin.daftar-pengurus.create');
    Route::post('/daftar-pengurus/tambah', [PengurusController::class, 'store'])->name('admin.daftar-pengurus.store');
    Route::post('/daftar-pengurus/delete/{id}', [PengurusController::class, 'destroy'])->name('admin.daftar-pengurus.destroy');

    // Pesan
    Route::get('/daftar-pesan', [PesanController::class, 'daftar'])->name('admin.daftar-pesan');
    Route::post('/daftar-pesan/delete/{id}', [PesanController::class, 'destroy'])->name('admin.daftar-pesan.destroy');

});