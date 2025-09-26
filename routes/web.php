<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\tentangController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('Beranda');
})->name('Beranda');


Route::get('/', [AppController::class, 'index'])->name('Beranda');
Route::get('/berita', [BeritaController::class, 'index'])->name('Halaman.Berita');
Route::get('/tentang', [tentangController::class, 'index'])->name('Halaman.tentang');
Route::get('/pelayanan', [PelayananController::class, 'index'])->name('Halaman.Pelayanan');
Route::get('/Alamat', [AlamatController::class, 'index'])->name('Halaman.Alamat');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/'); // arahkan ke beranda
})->name('logout');