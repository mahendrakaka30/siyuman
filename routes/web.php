<?php

use App\Http\Controllers\WelcomeDosenController;
use App\Http\Controllers\LoginDosenController; 
use App\Http\Controllers\LoginMahasiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\mahasiswacontroller;
use App\Http\Controllers\dosencontroller;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/home', function () {
    return view('welcome');
})->name('home');


// Halaman siyuman
Route::get('/siyuman', [LoginController::class, 'showLoginForm'])->name('siyuman');


// Halaman welcome dosen
Route::get('/welcome-dosen', [WelcomeDosenController::class, 'index'])->name('welcomedosen');
Route::get('/welcome-dosen/{id}', [WelcomeDosenController::class, 'show'])->name('welcomedosen.show');

// Login dosen
Route::get('/logindosen', [LoginDosenController::class, 'showLoginForm'])->name('login.dosen');
Route::post('/login-dosen', [LoginDosenController::class, 'login'])->name('logindosen.submit');
Route::post('/logout-dosen', [LoginDosenController::class, 'logout'])->name('logoutdosen');

// Login mahasiswa
Route::get('/login-mahasiswa', [LoginMahasiswaController::class, 'showLoginForm'])->name('loginmahasiswa');
Route::post('/login-mahasiswa', [LoginMahasiswaController::class, 'login'])->name('loginmahasiswa.submit');

// Logout umum
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Resource
Route::resource('mahasiswa', mahasiswacontroller::class);
Route::resource('dosen', DosenController::class);