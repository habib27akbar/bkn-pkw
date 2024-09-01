<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        return view('administrator.menu.index', compact('menu'));
    }

    public function create()
    {
        $menu = Menu::all();
        return view('administrator.menu.create', compact('menu'));
    }

    public function edit($id)
    {
        //$foto = Slider::all();
        //dd($sejarah);
        $menu_edit = Menu::findOrFail($id);
        $menu = Menu::all();

        return view('administrator.menu.edit', compact('menu', 'menu_edit'));
    }

    public function store(Request $request)
    {


        $storeData = [
            'nama_menu' => $request->input('nama_menu'),
            'select_menu' => $request->input('select_menu'),
            'parent_id' => $request->input('parent_id'),
            'icon' => $request->input('icon'),
            'url' => $request->input('url'),
        ];
        Menu::create($storeData);
        return redirect('administrator/module_menu')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {


        $updateData = [
            'nama_menu' => $request->input('nama_menu'),
            'select_menu' => $request->input('select_menu'),
            'parent_id' => $request->input('parent_id'),
            'icon' => $request->input('icon'),
            'url' => $request->input('url'),

        ];
        Menu::where('id', $id)->update($updateData);
        return redirect('administrator/module_menu')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Menu::findOrFail($id)->delete();
        return redirect('administrator/module_menu')->with('alert-success', 'Success deleted data');
    }
}
