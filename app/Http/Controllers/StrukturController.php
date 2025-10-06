<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class StrukturController extends Controller
{
    //
    public function index()
    {
        $pegawais = pegawai::all();
        return view ('Profil.Struktur', compact('pegawais'));
    }
}
