<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\tentangController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\AlamatController;

Route::get('/', function () {
    return view('Beranda');
})->name('Beranda');

Route::get('/berita', [BeritaController::class, 'index'])->name('Halaman.Berita');
Route::get('/tentang', [tentangController::class, 'index'])->name('Halaman.tentang');
Route::get('/pelayanan', [PelayananController::class, 'index'])->name('Halaman.Pelayanan');
Route::get('/Alamat', [AlamatController::class, 'index'])->name('Halaman.Alamat');
