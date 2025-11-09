<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;
use App\Models\Berita;

class AppController extends Controller
{
    //
    public function index()
    {

       $today = Visitor::whereDate('visited_at', Carbon::today())->count();

       $last7days = Visitor::where('visited_at', '>=', Carbon::now()->subDays(7))->count();

       $total = Visitor::count();

       $beritas = Berita::latest()->take(9)->get();

        // kirim ke view Beranda
        return view('Beranda', compact('beritas', 'today', 'last7days', 'total'));
    }
}
