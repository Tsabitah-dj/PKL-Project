<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\desa;
use App\Models\ketdesa;
use App\Models\jati;
use App\Models\kelpananjung;
use App\Models\langensari;
use App\Models\mekarjaya;
use App\Models\mekarwangi;
use App\Models\panjiwangi;
use App\Models\rancabango;
use App\Models\pasawahan;
use App\Models\Sinarjaya;
use App\Models\sukajadi;
use App\Models\sukawangi;
use App\Models\Tanjungkamuning;


class DesaController extends Controller
{
    public function show($nama)
    {
        $view = 'desa.' . strtolower($nama);

        // Kalau file-nya ada di folder /resources/views/desa/
        if (view()->exists($view)) {
            $ketdesas = ketdesa::all();
            $desas = desa::all();
            $jatis = jati::all();
            $kelpananjungs = kelpananjung::all();
            $langensaris = langensari::all();
            $mekarjayas = mekarjaya::all();
            $mekarwangis = mekarwangi::all();
            $panjiwangis = panjiwangi::all();
            $pasawahans = pasawahan::all();
            $rancabangos = rancabango::all();
            $sinarjayas = sinarjaya::all();
            $sukajadis = sukajadi::all();
            $sukawangis = sukawangi::all();
            $tanjungkamunings = tanjungkamuning::all();
            return view($view, compact('desas', 'jatis', 'ketdesas', 'kelpananjungs', 'langensaris', 'mekarjayas', 'mekarwangis', 'panjiwangis', 'pasawahans', 'rancabangos', 'sinarjayas', 'sukajadis', 'sukawangis', 'tanjungkamunings'));
        }


        abort(404, 'Halaman desa tidak ditemukan');
    }
}
