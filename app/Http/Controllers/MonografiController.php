<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Luasdantopografi;
use App\Models\Penduduk;
use App\Models\Berdasarkanagama;
use App\Models\Pekerjaan;
use App\Models\Usia5terbanyak;
use App\Models\tempatibadah;

class MonografiController extends Controller
{
    //
    public function index()
    {
        $tempatibadahs = Tempatibadah::all();
        $luasdantopografi = Luasdantopografi::all();
        $penduduk = Penduduk::all();
        $agama = Berdasarkanagama::all();
        $pekerjaan = Pekerjaan::all();
        $usia = Usia5terbanyak::all();
        return view ('Profil.Monografi', compact('luasdantopografi', 'penduduk', 'agama', 'pekerjaan', 'usia', 'tempatibadahs'));
    }
}
