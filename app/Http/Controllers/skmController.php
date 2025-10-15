<?php

namespace App\Http\Controllers;

use App\Models\skm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class skmController extends Controller
{
    //
    // tampilkan form
    public function index()
    {
        return view('Halaman.SKM');
    }

    // simpan hasil survei
    public function store(Request $request)
    {
        $request->validate([
            'pelayanan' => 'required|string|max:255',
            'nilai' => 'required|integer|min:1|max:5',
            'saran' => 'nullable|string',
        ]);

        Skm::create([
            'user_id' => Auth::id(),
            'pelayanan' => $request->pelayanan,
            'nilai' => $request->nilai,
            'saran' => $request->saran,
        ]);

        return back()->with('success', 'Terima kasih! Survei Anda sudah Terkirim.');
    }
}
