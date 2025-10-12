<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function show($nama)
    {
        $view = 'desa.' . strtolower($nama);

        // Kalau file-nya ada di folder /resources/views/desa/
        if (view()->exists($view)) {
            return view($view);
        }

        // Kalau tidak ditemukan, tampilkan halaman error
        abort(404, 'Halaman desa tidak ditemukan');
    }
}
