<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all(); // ambil semua data dari tabel beritas
        return view('Halaman.Berita', compact('beritas'));
    }
}
