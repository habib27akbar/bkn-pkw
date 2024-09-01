<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Unit;


use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $unit = Unit::all();
        return view('master.satuan_barang.index', compact('menu', 'unit'));
    }

    public function create()
    {
        $menu = Menu::all();
        $unit = Unit::all();

        return view('master.satuan_barang.create', compact('menu', 'unit'));
    }

    public function edit($id)
    {

        $unit = Unit::findOrFail($id);
        $menu = Menu::all();

        return view('master.satuan_barang.edit', compact('menu', 'unit'));
    }

    public function store(Request $request)
    {

        $storeData = [
            'nama_unit' => $request->input('nama_unit'),

        ];
        Unit::create($storeData);
        return redirect('unit')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {


        $updateData = [
            'nama_unit' => $request->input('nama_unit'),

        ];
        Unit::where('id', $id)->update($updateData);
        return redirect('unit')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Unit::findOrFail($id)->delete();
        return redirect('unit')->with('alert-success', 'Success deleted data');
    }
}
