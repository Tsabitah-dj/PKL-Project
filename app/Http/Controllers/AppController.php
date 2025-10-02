<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class AppController extends Controller
{
    //
    public function index()
    {
       $beritas = Berita::latest()->take(9)->get();

        // kirim ke view Beranda
        return view('Beranda', compact('beritas'));
    }
}
