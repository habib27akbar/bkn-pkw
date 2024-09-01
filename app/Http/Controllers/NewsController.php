<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        $news = News::all();
        return view('web.news.index', compact('menu', 'news'));
    }

    public function berita_bkn()
    {
        //$menu = Menu::all();
        $news = News::all();
        return view('web.news.berita_bkn', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::all();
        return view('web.news.create', compact('menu'));
    }

    public function edit($id)
    {
        //$foto = News::all();
        //dd($sejarah);
        $news = News::findOrFail($id);
        $menu = Menu::all();
        return view('web.news.edit', compact('news', 'menu'));
    }

    public function berita_bkn_edit($id)
    {
        //$foto = News::all();
        //dd($sejarah);
        $news = News::findOrFail($id);

        $news_all = News::all();
        //$menu = Menu::all();
        return view('web.news.berita_bkn_edit', compact('news', 'news_all'));
    }

    public function show($id)
    {
        //$foto = News::all();
        //dd($sejarah);
        $news = News::findOrFail($id);

        return view('web.news.edit', compact('news'));
    }

    public function store(Request $request)
    {
        $nama_image = null;
        if ($request->file('image')) {
            $image = $request->file('image');
            $nama_image = 'news-' . uniqid() . '-' . $image->getClientOriginalName();
            $dir = 'img/news';
            $image->move(public_path($dir), $nama_image);
        }


        $storeData = [
            'judul' => $request->input('judul'),
            'tanggal' => $request->input('tanggal'),
            'isi' => $request->input('isi'),
            'gambar' => $nama_image,
            'status' => $request->input('status')
        ];
        News::create($storeData);
        return redirect('news')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {
        $nama_image = $request->input('gambar_old');
        if ($request->file('image')) {
            $image = $request->file('image');
            $nama_image = 'news-' . uniqid() . '-' . $image->getClientOriginalName();
            $dir = 'img/news';
            $image->move(public_path($dir), $nama_image);
        }
        $updateDate = [
            'judul' => $request->input('judul'),
            'tanggal' => $request->input('tanggal'),
            'isi' => $request->input('isi'),
            'gambar' => $nama_image,
            'status' => $request->input('status')
        ];
        News::where('id', $id)->update($updateDate);
        return redirect('news')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        News::findOrFail($id)->delete();
        return redirect('news')->with('alert-success', 'Success deleted data');
    }
}
