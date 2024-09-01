<?php

namespace App\Http\Controllers;


use App\Models\Menu;
use App\Models\Lokasi;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use App\Models\KabupatenKota;

class LokasiController extends Controller
{
    public function index()
    {
        $menu = Menu::all();

        //$lokasi = Lokasi::all();

        $lokasi = Lokasi::join('ms_provinsi', 'lokasi.id_provinsi', '=', 'ms_provinsi.id_provinsi')
            ->join('ms_kabupaten_kota', 'lokasi.id_kabupaten_kota', '=', 'ms_kabupaten_kota.id_kabupaten_kota')
            ->get(['lokasi.*', 'ms_provinsi.nama_provinsi', 'ms_kabupaten_kota.nama_kabupaten_kota']);

        return view('pengaturan.lokasi.index', compact('menu', 'lokasi'));
    }

    public function create()
    {
        $menu = Menu::all();
        $provinsi = Provinsi::all();
        $kabupaten_kota = KabupatenKota::all();
        return view('pengaturan.lokasi.create', compact('menu', 'provinsi', 'kabupaten_kota'));
    }

    public function edit($id)
    {
        //$foto = Slider::all();
        //dd($sejarah);
        $lokasi = Lokasi::findOrFail($id);
        $menu = Menu::all();
        $provinsi = Provinsi::all();
        $kabupaten_kota = KabupatenKota::all();

        return view('pengaturan.lokasi.edit', compact('menu', 'lokasi', 'provinsi', 'kabupaten_kota'));
    }

    public function store(Request $request)
    {
        $nama_image = null;
        if ($request->file('image')) {
            $image = $request->file('image');
            $nama_image = 'doc-' . uniqid() . '-' . $image->getClientOriginalName();
            $dir = 'img/doc';
            $image->move(public_path($dir), $nama_image);
        }

        $storeData = [
            'detail_lokasi' => $request->input('detail_lokasi'),
            'id_provinsi' => $request->input('id_provinsi'),
            'id_kabupaten_kota' => $request->input('id_kabupaten_kota'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'kesiapan_lokasi' => $request->input('kesiapan_lokasi'),
            'dokumen' => $nama_image,
        ];
        Lokasi::create($storeData);
        return redirect('lokasi')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {

        $nama_image = $request->input('dokumen_old');
        if ($request->file('image')) {
            $image = $request->file('image');
            $nama_image = 'doc-' . uniqid() . '-' . $image->getClientOriginalName();
            $dir = 'img/doc';
            $image->move(public_path($dir), $nama_image);
        }
        $updateData = [
            'detail_lokasi' => $request->input('detail_lokasi'),
            'id_provinsi' => $request->input('id_provinsi'),
            'id_kabupaten_kota' => $request->input('id_kabupaten_kota'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'kesiapan_lokasi' => $request->input('kesiapan_lokasi'),
            'dokumen' => $nama_image,
        ];
        Lokasi::where('id', $id)->update($updateData);
        return redirect('lokasi')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Lokasi::findOrFail($id)->delete();
        return redirect('lokasi')->with('alert-success', 'Success deleted data');
    }
}
