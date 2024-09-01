<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Menu;
use App\Models\Unit;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        //$barang = Barang::all();
        $barang =
            Barang::join('unit', 'barang.unit', '=', 'unit.id')
            ->join('kategori', 'barang.kategori', '=', 'kategori.id')
            ->get(['barang.*', 'unit.nama_unit', 'kategori.nama_kategori']);
        return view('master.barang.index', compact('menu', 'barang'));
    }

    public function create()
    {
        $menu = Menu::all();
        $unit = Unit::all();
        $kategori = Kategori::all();
        return view('master.barang.create', compact('menu', 'kategori', 'unit'));
    }

    public function edit($id)
    {
        //$foto = Slider::all();
        //dd($sejarah);
        $barang = Barang::findOrFail($id);
        $menu = Menu::all();
        $unit = Unit::all();
        $kategori = Kategori::all();

        return view('master.barang.edit', compact('menu', 'barang', 'unit', 'kategori'));
    }

    public function store(Request $request)
    {

        $storeData = [
            'nama_barang' => $request->input('nama_barang'),
            'kategori' => $request->input('kategori'),
            'qty' => $request->input('qty'),
            'unit' => $request->input('unit'),
            'size' => $request->input('size'),
            'warna' => $request->input('warna'),
            'brand' => $request->input('brand'),
        ];
        Barang::create($storeData);
        return redirect('barang')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {


        $updateData = [
            'nama_barang' => $request->input('nama_barang'),
            'kategori' => $request->input('kategori'),
            'qty' => $request->input('qty'),
            'unit' => $request->input('unit'),
            'size' => $request->input('size'),
            'warna' => $request->input('warna'),
            'brand' => $request->input('brand'),
        ];
        Barang::where('id', $id)->update($updateData);
        return redirect('barang')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Barang::findOrFail($id)->delete();
        return redirect('barang')->with('alert-success', 'Success deleted data');
    }
}
