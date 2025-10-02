<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomentarController extends Controller
{
    //
    public function store(Request $request, $berita_id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'isi' => 'required|string',
        ]);

        Komentar::create([
            'berita_id' => $berita_id,
            'nama' => $request->nama,
            'isi' => $request->isi,
        ]);

        return back()->with('success', 'Komentar berhasil ditambahkan!');
    }
}
