<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SetupSdm;
use App\Models\Sdm;
use App\Models\Provinsi;
use App\Models\KabupatenKota;
use App\Models\Lokasi;

class SetupSdmPengawasController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $setup_sdm =
            SetupSdm::join('sdm', 'setup_sdm.id_sdm', '=', 'sdm.id')
            ->join('lokasi', 'setup_sdm.id_lokasi', '=', 'lokasi.id')
            ->join('ms_provinsi', 'lokasi.id_provinsi', '=', 'ms_provinsi.id_provinsi')
            ->join('ms_kabupaten_kota', 'lokasi.id_kabupaten_kota', '=', 'ms_kabupaten_kota.id_kabupaten_kota')
            ->where('setup_sdm.tipe', 1)
            ->get(['setup_sdm.*', 'sdm.nama', 'ms_provinsi.nama_provinsi', 'ms_kabupaten_kota.nama_kabupaten_kota', 'lokasi.detail_lokasi']);
        return view('pengaturan_sdm.pengawas.index', compact('menu', 'setup_sdm'));
    }

    public function create()
    {
        $menu = Menu::all();
        $pengawas = Sdm::where('tipe', 2)->get();
        $koordinator = Sdm::where('tipe', 1)->get();
        $provinsi = Provinsi::all();
        $kabupaten_kota = KabupatenKota::all();
        $lokasi = Lokasi::join('ms_provinsi', 'lokasi.id_provinsi', '=', 'ms_provinsi.id_provinsi')
            ->join('ms_kabupaten_kota', 'lokasi.id_kabupaten_kota', '=', 'ms_kabupaten_kota.id_kabupaten_kota')
            ->get(['lokasi.*', 'ms_provinsi.nama_provinsi', 'ms_kabupaten_kota.nama_kabupaten_kota']);
        return view('pengaturan_sdm.pengawas.create', compact('menu', 'pengawas', 'koordinator', 'provinsi', 'kabupaten_kota', 'lokasi'));
    }

    public function edit($id)
    {
        //$foto = Slider::all();
        //dd($sejarah);
        $setup_sdm = SetupSdm::findOrFail($id);
        $menu = Menu::all();
        $pengawas = Sdm::where('tipe', 2)->get();
        $koordinator = Sdm::where('tipe', 1)->get();
        $provinsi = Provinsi::all();
        $kabupaten_kota = KabupatenKota::all();
        $lokasi = Lokasi::join('ms_provinsi', 'lokasi.id_provinsi', '=', 'ms_provinsi.id_provinsi')
            ->join('ms_kabupaten_kota', 'lokasi.id_kabupaten_kota', '=', 'ms_kabupaten_kota.id_kabupaten_kota')
            ->get(['lokasi.*', 'ms_provinsi.nama_provinsi', 'ms_kabupaten_kota.nama_kabupaten_kota']);
        return view('pengaturan_sdm.pengawas.edit', compact('menu', 'setup_sdm', 'provinsi', 'kabupaten_kota', 'pengawas', 'koordinator', 'lokasi'));
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
            'id_sdm' => $request->input('id_sdm'),
            'id_lokasi' => $request->input('id_lokasi'),
            'dokumen' => $nama_image,
            'tipe' => 1,
        ];
        SetupSdm::create($storeData);
        return redirect('setup_sdm_pengawas')->with('alert-success', 'Success Tambah Data');
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
            'id_sdm' => $request->input('id_sdm'),
            'id_lokasi' => $request->input('id_lokasi'),
            'dokumen' => $nama_image,
            'tipe' => 1,
        ];
        SetupSdm::where('id', $id)->update($updateData);
        return redirect('setup_sdm_pengawas')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        SetupSdm::findOrFail($id)->delete();
        return redirect('setup_sdm_pengawas')->with('alert-success', 'Success deleted data');
    }
}
