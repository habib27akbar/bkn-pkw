<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\Menu;
use App\Models\Sdm;

class KoordinatorController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $sdm = Sdm::where('tipe', 1)->get();
        return view('sdm.koordinator.index', compact('menu', 'sdm'));
    }

    public function create()
    {
        $menu = Menu::all();
        return view('sdm.koordinator.create', compact('menu'));
    }

    public function edit($id)
    {
        //$foto = Slider::all();
        //dd($sejarah);
        $sdm = Sdm::findOrFail($id);
        $menu = Menu::all();

        return view('sdm.koordinator.edit', compact('menu', 'sdm'));
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
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'no_ktp' => $request->input('no_ktp'),
            'no_hp' => $request->input('no_hp'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password_v')),
            'password_v' => $request->input('password_v'),
            'dokumen' => $nama_image,
            'tipe' => 1,
            'status' => $request->input('status'),
        ];
        Sdm::create($storeData);
        return redirect('koordinator')->with('alert-success', 'Success Tambah Data');
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
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'no_ktp' => $request->input('no_ktp'),
            'no_hp' => $request->input('no_hp'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password_v')),
            'password_v' => $request->input('password_v'),
            'dokumen' => $nama_image,
            'tipe' => 1,
            'status' => $request->input('status'),
        ];
        Sdm::where('id', $id)->update($updateData);
        return redirect('koordinator')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Sdm::findOrFail($id)->delete();
        return redirect('koordinator')->with('alert-success', 'Success deleted data');
    }
}
