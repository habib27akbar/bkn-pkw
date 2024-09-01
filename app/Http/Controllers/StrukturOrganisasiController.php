<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\StrukturOrganisasi;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $struktur_organisasi = StrukturOrganisasi::findOrFail(1);
        return view('web.struktur_organisasi.index', compact('menu', 'struktur_organisasi'));
    }

    public function update(Request $request, $id)
    {


        $image = $request->file('image');
        $nama_image = 'news-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/news';
        $image->move(public_path($dir), $nama_image);

        $updateDate = [

            'image' => $nama_image,

        ];
        StrukturOrganisasi::where('id', $id)->update($updateDate);
        return redirect('struktur_organisasi')->with('alert-success', 'Success Update Data');
    }

    public function struktur_organisasi()
    {

        $struktur_organisasi = StrukturOrganisasi::findOrFail(1);
        return view('web.struktur_organisasi.struktur_organisasi', compact('struktur_organisasi'));
    }
}
