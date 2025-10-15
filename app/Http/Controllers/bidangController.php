<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bidang;

class bidangController extends Controller
{
    //
      public function index()
    {
      $bidangs = bidang::all();
       return view ('Profil.bidang', compact('bidangs'));
    }
}
