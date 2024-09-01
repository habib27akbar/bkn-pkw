<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Menu;
use App\Models\PelaporanKegiatan;
use Illuminate\Http\Request;

class PelaksanaanHarianController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        //$barang = PelaporanKegiatan::all();
        $barang =
            PelaporanKegiatan::join('barang', 'pelaporan_kegiatan.id_barang', '=', 'barang.id')
            ->join('unit', 'barang.unit', '=', 'unit.id')
            ->join('kategori', 'barang.kategori', '=', 'kategori.id')
            ->where('pelaporan_kegiatan.tipe_transaksi', 4)
            ->get(['pelaporan_kegiatan.*', 'barang.nama_barang', 'barang.size', 'barang.warna', 'barang.brand', 'unit.nama_unit', 'kategori.nama_kategori']);
        return view('pelaporan_kegiatan.pelaksanaan_harian.index', compact('menu', 'barang'));
    }

    public function create()
    {
        $menu = Menu::all();
        $barang = Barang::all();

        return view('pelaporan_kegiatan.pelaksanaan_harian.create', compact('menu', 'barang'));
    }

    public function edit($id)
    {
        //$foto = Slider::all();
        //dd($sejarah);
        $pelaporan_kegiatan = PelaporanKegiatan::findOrFail($id);
        $menu = Menu::all();
        $barang = Barang::all();

        return view('pelaporan_kegiatan.pelaksanaan_harian.edit', compact('menu', 'barang', 'pelaporan_kegiatan'));
    }

    public function store(Request $request)
    {

        $storeData = [
            'id_barang' => $request->input('id_barang'),
            'tipe_transaksi' => 4,
            'qty_barang' => $request->input('qty_barang'),
            'status' => 1,

        ];
        PelaporanKegiatan::create($storeData);
        return redirect('pelaksanaan_harian')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {


        $updateData = [
            'id_barang' => $request->input('id_barang'),
            'tipe_transaksi' => 4,
            'qty_barang' => $request->input('qty_barang'),
            'status' => 1,

        ];
        PelaporanKegiatan::where('id', $id)->update($updateData);
        return redirect('pelaksanaan_harian')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        PelaporanKegiatan::findOrFail($id)->delete();
        return redirect('pelaksanaan_harian')->with('alert-success', 'Success deleted data');
    }
}
