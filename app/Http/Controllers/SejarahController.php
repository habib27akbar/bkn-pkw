<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Sejarah;

class SejarahController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $sejarah = Sejarah::findOrFail(1);
        return view('web.sejarah.index', compact('menu', 'sejarah'));
    }

    public function sejarah_bkn()
    {
        //$menu = Menu::all();
        $sejarah = Sejarah::findOrFail(1);
        return view('web.sejarah.sejarah_bkn', compact('sejarah'));
    }

    public function update(Request $request, $id)
    {

        Sejarah::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect('sejarah')->with('alert-success', 'Success Update Data');
    }
}
