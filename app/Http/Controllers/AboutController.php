<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $about = VisiMisi::findOrFail(1);
        return view('web.profil.index', compact('menu', 'about'));
    }

    public function update(Request $request, $id)
    {

        VisiMisi::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect('about')->with('alert-success', 'Success Update Data');
    }

    public function visi_misi()
    {
        //$menu = Menu::all();
        $about = VisiMisi::findOrFail(1);
        return view('web.profil.visi_misi', compact('about'));
    }
}
