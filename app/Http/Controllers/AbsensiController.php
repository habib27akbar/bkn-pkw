<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\Menu;
use App\Models\Absensi;
use App\Models\Sdm;

class AbsensiController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $absensi = Absensi::select('absensi.*', 'sdm.nama')
            ->leftJoin('sdm', 'absensi.id_sdm', '=', 'sdm.id')
            ->get();
        return view('pelaporan_kegiatan.absensi.index', compact('menu', 'absensi'));
    }

    public function create()
    {
        $menu = Menu::all();
        $sdm = Sdm::all();
        return view('pelaporan_kegiatan.absensi.create', compact('menu', 'sdm'));
    }

    public function edit($id)
    {
        //$foto = Slider::all();
        //dd($sejarah);
        $absensi = Absensi::findOrFail($id);
        $menu = Menu::all();
        $sdm = Sdm::all();

        return view('pelaporan_kegiatan.absensi.edit', compact('menu', 'absensi', 'sdm'));
    }

    public function store(Request $request)
    {

        $storeData = [
            'tanggal' => $request->input('tanggal'),
            'id_sdm' => $request->input('id_sdm'),
            'kehadiran' => $request->input('kehadiran')
        ];
        Absensi::create($storeData);
        return redirect('absensi')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {


        $updateData = [
            'tanggal' => $request->input('tanggal'),
            'id_sdm' => $request->input('id_sdm'),
            'kehadiran' => $request->input('kehadiran')
        ];
        Absensi::where('id', $id)->update($updateData);
        return redirect('absensi')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Absensi::findOrFail($id)->delete();
        return redirect('absensi')->with('alert-success', 'Success deleted data');
    }
}
