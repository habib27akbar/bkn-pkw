<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Menu;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $menu = Menu::all();


        $kegiatan = Kegiatan::join('lokasi', 'kegiatan.id_lokasi', '=', 'lokasi.id')
            ->join('ms_provinsi', 'lokasi.id_provinsi', '=', 'ms_provinsi.id_provinsi')
            ->join('ms_kabupaten_kota', 'lokasi.id_kabupaten_kota', '=', 'ms_kabupaten_kota.id_kabupaten_kota')
            ->get(['kegiatan.*', 'lokasi.detail_lokasi', 'ms_provinsi.nama_provinsi', 'ms_kabupaten_kota.nama_kabupaten_kota']);

        return view('pengaturan.daftar_kegiatan.index', compact('menu', 'kegiatan'));
    }

    public function create()
    {
        $menu = Menu::all();
        $lokasi = Lokasi::join('ms_provinsi', 'lokasi.id_provinsi', '=', 'ms_provinsi.id_provinsi')
            ->join('ms_kabupaten_kota', 'lokasi.id_kabupaten_kota', '=', 'ms_kabupaten_kota.id_kabupaten_kota')
            ->get(['lokasi.*', 'ms_provinsi.nama_provinsi', 'ms_kabupaten_kota.nama_kabupaten_kota']);
        return view('pengaturan.daftar_kegiatan.create', compact('menu', 'lokasi'));
    }

    public function edit($id)
    {
        //$foto = Slider::all();
        //dd($sejarah);
        $kegiatan = Kegiatan::findOrFail($id);
        $menu = Menu::all();
        $lokasi = Lokasi::join('ms_provinsi', 'lokasi.id_provinsi', '=', 'ms_provinsi.id_provinsi')
            ->join('ms_kabupaten_kota', 'lokasi.id_kabupaten_kota', '=', 'ms_kabupaten_kota.id_kabupaten_kota')
            ->get(['lokasi.*', 'ms_provinsi.nama_provinsi', 'ms_kabupaten_kota.nama_kabupaten_kota']);

        return view('pengaturan.daftar_kegiatan.edit', compact('menu', 'lokasi', 'kegiatan'));
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
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'tanggal' => $request->input('tanggal'),
            'id_lokasi' => $request->input('id_lokasi'),
            'dokumen' => $nama_image,
        ];
        Kegiatan::create($storeData);
        return redirect('kegiatan')->with('alert-success', 'Success Tambah Data');
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
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'tanggal' => $request->input('tanggal'),
            'id_lokasi' => $request->input('id_lokasi'),
            'dokumen' => $nama_image,
        ];
        Kegiatan::where('id', $id)->update($updateData);
        return redirect('kegiatan')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Kegiatan::findOrFail($id)->delete();
        return redirect('kegiatan')->with('alert-success', 'Success deleted data');
    }
}
