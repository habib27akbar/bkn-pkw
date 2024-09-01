<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Lokasi;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use App\Models\KabupatenKota;
use App\Models\Sdm;

class KesiapanLokasiController extends Controller
{
    public function index()
    {
        $menu = Menu::all();

        //$lokasi = Lokasi::all();

        $lokasi = Lokasi::join('ms_provinsi', 'lokasi.id_provinsi', '=', 'ms_provinsi.id_provinsi')
            ->join('ms_kabupaten_kota', 'lokasi.id_kabupaten_kota', '=', 'ms_kabupaten_kota.id_kabupaten_kota')
            ->leftJoin('sdm', 'lokasi.id_koordinator', '=', 'sdm.id')
            ->get(['lokasi.*', 'ms_provinsi.nama_provinsi', 'ms_kabupaten_kota.nama_kabupaten_kota', 'sdm.nama']);

        return view('laporan.kesiapan_lokasi.index', compact('menu', 'lokasi'));
    }

    public function edit($id)
    {
        //$foto = Slider::all();
        //dd($sejarah);
        $lokasi = Lokasi::join('ms_provinsi', 'lokasi.id_provinsi', '=', 'ms_provinsi.id_provinsi')
            ->join('ms_kabupaten_kota', 'lokasi.id_kabupaten_kota', '=', 'ms_kabupaten_kota.id_kabupaten_kota')
            ->where('lokasi.id', $id)
            ->get(['lokasi.*', 'ms_provinsi.nama_provinsi', 'ms_kabupaten_kota.nama_kabupaten_kota']);
        $menu = Menu::all();
        $provinsi = Provinsi::all();
        $kabupaten_kota = KabupatenKota::all();
        $sdm = Sdm::all();

        return view('laporan.kesiapan_lokasi.edit', compact('menu', 'lokasi', 'provinsi', 'kabupaten_kota', 'sdm'));
    }

    public function update(Request $request, $id)
    {


        $updateData = [
            'kesiapan_lokasi' => $request->input('kesiapan_lokasi'),
        ];
        Lokasi::where('id', $id)->update($updateData);
        return redirect('kesiapan-lokasi')->with('alert-success', 'Success Update Data');
    }
}
