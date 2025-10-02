<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelayanan;

class PelayananController extends Controller
{
     public function index()
    {
        $pelayanans = pelayanan::all();
        return view('Halaman.Pelayanan', compact('pelayanans'));
    }
}
  