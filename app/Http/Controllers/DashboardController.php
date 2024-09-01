<?php

namespace App\Http\Controllers;

use App\Models\Sdm;
use App\Models\Menu;

use App\Models\News;
use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $koordinator = Sdm::where('tipe', 1)->count();
        $pengawas = Sdm::where('tipe', 2)->count();
        $teknisi = Sdm::where('tipe', 3)->count();
        $lokasi = Lokasi::count();
        $news = News::all();
        return view('dashboard.index', compact('menu', 'koordinator', 'pengawas', 'teknisi', 'lokasi', 'news'));
    }
}
