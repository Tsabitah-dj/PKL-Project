<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;

class AppController extends Controller
{
    //
    public function index()
    {
       $bidangs = Bidang::all();

        // kirim ke view Beranda
        return view('Beranda', compact('bidangs'));
    }
}
