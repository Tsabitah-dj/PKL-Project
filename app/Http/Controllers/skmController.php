<?php

namespace App\Http\Controllers;

use App\Models\skm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class skmController extends Controller
{
    
    public function index()
    {
        return view('Halaman.SKM');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'penilaian' => 'nullable|string',
            'nilai' => 'required|integer|min:1|max:5',
            'saran' => 'nullable|string',
        ]);

        Skm::create([
            'user_id' => Auth::id(),
            'penilaian' => $request->penilaian,
            'nilai' => $request->nilai,
            'saran' => $request->saran,
        ]);

        return back()->with('success', 'Terima kasih! Survei Anda sudah Terkirim.');
    }
}
