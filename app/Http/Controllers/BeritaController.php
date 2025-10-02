<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all(); // ambil semua data dari tabel beritas
        $beritas = Berita::with('komentar')->get();
        return view('Halaman.Berita', compact('beritas'));
    }

    public function like($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->increment('likes'); // tambah 1
        return back()->with('success', 'Berhasil menambahkan like 👍');
    }
}
