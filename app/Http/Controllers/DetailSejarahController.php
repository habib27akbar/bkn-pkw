<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\DetailSejarah;
use Illuminate\Http\Request;

class DetailSejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        $detail = DetailSejarah::all();
        return view('web.detail_sejarah.index', compact('menu', 'detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::all();
        return view('web.detail_sejarah.create', compact('menu'));
    }

    public function edit($id)
    {
        //$foto = DetailSejarah::all();
        //dd($sejarah);
        $menu = Menu::all();
        $detail = DetailSejarah::findOrFail($id);

        return view('web.detail_sejarah.edit', compact('detail', 'menu'));
    }

    public function show($id)
    {
        //$foto = DetailSejarah::all();
        //dd($sejarah);
        $detail = DetailSejarah::findOrFail($id);

        return view('web.detail_sejarah.edit', compact('detail'));
    }

    public function store(Request $request)
    {
        $nama_image = null;
        if ($request->file('image')) {
            $image = $request->file('image');
            $nama_image = 'detail-' . uniqid() . '-' . $image->getClientOriginalName();
            $dir = 'img/detail';
            $image->move(public_path($dir), $nama_image);
        }


        $storeData = [

            'alamat' => $request->input('alamat'),
            'gambar' => $nama_image,
            //'status' => 1
        ];
        DetailSejarah::create($storeData);
        return redirect('detail')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {
        $nama_image = $request->input('gambar_old');
        if ($request->file('image')) {
            $image = $request->file('image');
            $nama_image = 'detail-' . uniqid() . '-' . $image->getClientOriginalName();
            $dir = 'img/detail';
            $image->move(public_path($dir), $nama_image);
        }
        $updateDate = [
            'alamat' => $request->input('alamat'),
            'gambar' => $nama_image,

        ];
        DetailSejarah::where('id', $id)->update($updateDate);
        return redirect('detail')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        DetailSejarah::findOrFail($id)->delete();
        return redirect('detail')->with('alert-success', 'Success deleted data');
    }
}
