<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\desa;

class tentangController extends Controller
{
    //
    public function index()
    {
       $desas = desa::all();
       return view ('Halaman.tentang', compact('desas'));
    }
}
