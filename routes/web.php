<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\AlamatController;

Route::get('/', function () {
    return view('Beranda');
})->name('Beranda');

Route::get('/berita', [BeritaController::class, 'index'])->name('Halaman.Berita');
Route::get('/tentang', [TentangController::class, 'index'])->name('Halaman.Tentang');
Route::get('/pelayanan', [PelayananController::class, 'index'])->name('Halaman.Pelayanan');
Route::get('/Alamat', [AlamatController::class, 'index'])->name('Halaman.Alamat');
