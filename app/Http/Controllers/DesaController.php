<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\desa;
use App\Models\ketdesa;

class DesaController extends Controller
{
    public function show($nama)
    {
        $view = 'desa.' . strtolower($nama);

        // Kalau file-nya ada di folder /resources/views/desa/
        if (view()->exists($view)) {
            $desas = desa::all();
            $ketdesas = ketdesa::all();
            return view($view, compact('desas', 'ketdesas'));
        }


        abort(404, 'Halaman desa tidak ditemukan');
    }
}
