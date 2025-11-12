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
        $validated = $request->validate([
            'pertanyaan1' => 'required|string',
            'pertanyaan2' => 'required|string',
            'pertanyaan3' => 'required|string',
            'pertanyaan4' => 'required|string',
            'pertanyaan5' => 'required|string',
            'pertanyaan6' => 'required|string',
            'pertanyaan7' => 'required|string',
            'pertanyaan8' => 'required|string',
            'pertanyaan9' => 'required|string',
            'saran' => 'nullable|string',
        ]);

        Skm::create([
            'user_id' => Auth::id(),
            'pertanyaan1' => $request->pertanyaan1,
            'pertanyaan2' => $request->pertanyaan2,
            'pertanyaan3' => $request->pertanyaan3,
            'pertanyaan4' => $request->pertanyaan4,
            'pertanyaan5' => $request->pertanyaan5,
            'pertanyaan6' => $request->pertanyaan6,
            'pertanyaan7' => $request->pertanyaan7,
            'pertanyaan8' => $request->pertanyaan8,
            'pertanyaan9' => $request->pertanyaan9,
            'saran' => $request->saran,
        ]);

        return back()->with('success', 'Terima kasih! Survei Anda sudah Terkirim.');
    }
}
