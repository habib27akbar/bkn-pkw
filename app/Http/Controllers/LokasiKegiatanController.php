<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class LokasiKegiatanController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $kegiatan = Kegiatan::join('lokasi', 'kegiatan.id_lokasi', '=', 'lokasi.id')
            ->join('ms_provinsi', 'lokasi.id_provinsi', '=', 'ms_provinsi.id_provinsi')
            ->join('ms_kabupaten_kota', 'lokasi.id_kabupaten_kota', '=', 'ms_kabupaten_kota.id_kabupaten_kota')
            ->get(['kegiatan.*', 'lokasi.detail_lokasi', 'ms_provinsi.nama_provinsi', 'ms_kabupaten_kota.nama_kabupaten_kota', 'lokasi.latitude', 'lokasi.longitude']);

        return view('laporan.lokasi_kegiatan.index', compact('menu', 'kegiatan'));
    }
}
