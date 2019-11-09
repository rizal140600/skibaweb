<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kepala;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class KepalaController extends Controller
{
    public function index()
    {
        $kepala = \App\Kepala::all();
        return view(' backend/profil/kepala/index', ['kepala' => $kepala]);
    }
    public function create(Request $request)
    {
        
        $cover = $request->file('kepala_gambar');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $kepala = new Kepala();
        $kepala->kepala_gambar = $cover->getFileName().'.'.$extension;
        $kepala->kepala = $request->kepala;
        $kepala->kepala_sambutan = $request->kepala_sambutan;
        // $kepala->original_filename = $cover->getClientOriginalName();
        // $kepala->filename = $cover->getFilename().'.'.$extension;
        $kepala->save();
        // \App\kepala::create(
        //     $request->all()
        // );
        return redirect('/profil/kepala')->with('success', 'Tambah data berhasil');
    }
    public function update(Request $request, $id)
    {
        $kepala = \App\Kepala::find($id);
        $kepala->delete();
        $cover = $request->file('kepala_gambar');
        $kepala = new Kepala();
        if ($request->hasFile('kepala_gambar')) {
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
            $kepala->kepala_gambar = $cover->getFileName().'.'.$extension;
        }else {
            $kepala->kepala_gambar = $request->kepala_gambar;
        }

        $kepala->kepala = $request->kepala;
        $kepala->kepala_sambutan = $request->kepala_sambutan;
        // $kepala->original_filename = $cover->getClientOriginalName();
        // $kepala->filename = $cover->getFilename().'.'.$extension;
        $kepala->save($request->all());
        // \App\kepala::create(
        //     $request->all()
        // );
        return redirect('/profil/kepala')->with('update', 'Data Berhasil di edit');
    }
}
