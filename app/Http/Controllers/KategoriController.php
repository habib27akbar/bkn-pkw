<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $kategori = Kategori::all();
        return view('master.kategori_barang.index', compact('menu', 'kategori'));
    }

    public function create()
    {
        $menu = Menu::all();
        $kategori = Kategori::all();

        return view('master.kategori_barang.create', compact('menu', 'kategori'));
    }

    public function edit($id)
    {

        $kategori = Kategori::findOrFail($id);
        $menu = Menu::all();

        return view('master.kategori_barang.edit', compact('menu', 'kategori'));
    }

    public function store(Request $request)
    {

        $storeData = [
            'nama_kategori' => $request->input('nama_kategori'),

        ];
        Kategori::create($storeData);
        return redirect('kategori')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {


        $updateData = [
            'nama_kategori' => $request->input('nama_kategori'),

        ];
        Kategori::where('id', $id)->update($updateData);
        return redirect('kategori')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Kategori::findOrFail($id)->delete();
        return redirect('kategori')->with('alert-success', 'Success deleted data');
    }
}
