<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function show($slug)
    { 
        $viewPath = 'desa.' . $slug;

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }

        abort(404, 'Halaman desa tidak ditemukan');
    }
}
