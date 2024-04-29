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
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Lupa Password
Route::get('/lupa-password', [AuthController::class, 'lupaPassword'])->name('lupa-password')->middleware('guest');
Route::post('/lupa-password', [AuthController::class, 'sendLupaPassword'])->name('lupa-password.post')->middleware('guest');

// Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

// Profil
Route::get('/tentang-kami', [ProfilController::class, 'index'])->name('profil');
Route::get('/tentang-kami#pengurus')->name('pengurus');

// Kontak Kami
Route::get('/kontak-kami', [ContactController::class,'index'])->name('kontak-kami');
Route::post('/kontak-kami', [ContactController::class, 'store'])->name('kontak-kami.store');

// Admin
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('admin');

    // Berita
    Route::get('/daftar-berita', [BeritaController::class, 'daftar'])->name('admin.daftar-berita');
    Route::get('/daftar-berita/tambah', [BeritaController::class, 'create'])->name('admin.daftar-berita.create');
    Route::post('/daftar-berita/tambah', [BeritaController::class, 'store'])->name('admin.daftar-berita.store');
    Route::get('/daftar-berita/edit/{id}', [BeritaController::class, 'edit'])->name('admin.daftar-berita.edit');
    Route::post('/daftar-berita/edit/{id}', [BeritaController::class, 'update'])->name('admin.daftar-berita.update');
    Route::post('/daftar-berita/delete/{id}', [BeritaController::class, 'destroy'])->name('admin.daftar-berita.destroy');

    // Pengurus
    Route::get('/daftar-pengurus', [PengurusController::class, 'daftar'])->name('admin.daftar-pengurus');
    Route::get('/daftar-pengurus/tambah', [PengurusController::class, 'create'])->name('admin.daftar-pengurus.create');
    Route::post('/daftar-pengurus/tambah', [PengurusController::class, 'store'])->name('admin.daftar-pengurus.store');
    Route::get('/daftar-pengurus/edit/{id}', [PengurusController::class, 'edit'])->name('admin.daftar-pengurus.edit');
    Route::post('/daftar-pengurus/edit/{id}', [PengurusController::class, 'update'])->name('admin.daftar-pengurus.update');
    Route::post('/daftar-pengurus/delete/{id}', [PengurusController::class, 'destroy'])->name('admin.daftar-pengurus.destroy');

    // Pesan
    Route::get('/daftar-pesan', [PesanController::class, 'daftar'])->name('admin.daftar-pesan');
    Route::post('/daftar-pesan/delete/{id}', [PesanController::class, 'destroy'])->name('admin.daftar-pesan.destroy');

    // Edit Profil
    Route::get('/edit-profil', [UserController::class, 'edit'])->name('admin.edit-profil');
    Route::post('/edit-profil', [UserController::class, 'update'])->name('admin.edit-profil.update');
    Route::post('/edit-profil/password', [UserController::class, 'updatePassword'])->name('admin.edit-profil.update-password');
});