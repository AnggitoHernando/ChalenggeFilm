<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films= Film::all();
        return view('list_film',compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_film');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $film =new Film;
        $film->judul_film =$request->JudulFilm;
        $film->tahun_rilis =$request->TahunRilis;
        $film->nama_sutradara =$request->NamaSutradara;

        $gambar = $request->gambar;
        $namafile = time().'.'.$gambar->getClientOriginalExtension();
        $gambar->storeAs('public/gambar/', $namafile);
        $film->gambar=$namafile;

        $film->save();
        return redirect('/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $films= Film::find($id);
        return view('edit_film',compact('films'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $film= Film::find($id);
        $film->judul_film =$request->JudulFilm;
        $film->tahun_rilis =$request->TahunRilis;
        $film->nama_sutradara =$request->NamaSutradara;

        $gambar = $request->gambar;
        if($gambar){
            Storage::delete('public/gambar/'.$film->gambar);
            $namafile = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->storeAs('public/gambar/', $namafile);
            $film->gambar=$namafile;
        }
        $film->save();
        return redirect('/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film= Film::find($id);
        Storage::delete('public/gambar/'.$film->gambar);
        $film->delete();

        return redirect('/list');
    }
}
