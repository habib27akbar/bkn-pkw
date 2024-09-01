<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        $event = Event::all();
        return view('web.event.index', compact('menu', 'event'));
    }

    public function event_bkn()
    {
        //$menu = Menu::all();
        $event = Event::all();
        return view('web.event.event_bkn', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::all();
        return view('web.event.create', compact('menu'));
    }

    public function edit($id)
    {
        //$foto = Event::all();
        //dd($sejarah);
        $menu = Menu::all();
        $event = Event::findOrFail($id);

        return view('web.event.edit', compact('event', 'menu'));
    }

    public function event_bkn_edit($id)
    {
        //$foto = News::all();
        //dd($sejarah);
        $event = Event::findOrFail($id);
        $event_all = Event::all();
        //$menu = Menu::all();
        return view('web.event.event_bkn_edit', compact('event', 'event_all'));
    }

    public function show($id)
    {
        //$foto = Event::all();
        //dd($sejarah);
        $event = Event::findOrFail($id);

        return view('web.event.edit', compact('event'));
    }

    public function store(Request $request)
    {
        $nama_image = null;
        if ($request->file('image')) {
            $image = $request->file('image');
            $nama_image = 'event-' . uniqid() . '-' . $image->getClientOriginalName();
            $dir = 'img/event';
            $image->move(public_path($dir), $nama_image);
        }


        $storeData = [
            'judul' => $request->input('judul'),
            'tanggal' => $request->input('tanggal'),
            'isi' => $request->input('isi'),
            'gambar' => $nama_image,
            //'status' => 1
        ];
        Event::create($storeData);
        return redirect('event')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {
        $nama_image = $request->input('gambar_old');
        if ($request->file('image')) {
            $image = $request->file('image');
            $nama_image = 'event-' . uniqid() . '-' . $image->getClientOriginalName();
            $dir = 'img/event';
            $image->move(public_path($dir), $nama_image);
        }
        $updateDate = [
            'judul' => $request->input('judul'),
            'tanggal' => $request->input('tanggal'),
            'isi' => $request->input('isi'),
            'gambar' => $nama_image,

        ];
        Event::where('id', $id)->update($updateDate);
        return redirect('event')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();
        return redirect('event')->with('alert-success', 'Success deleted data');
    }
}
