<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Galeri;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    public function index()
    {
        $data_galeri = \App\Galeri::all();
        $data_kategori = \App\Kategori::all();
        return view('backend.galeri.index', [
            'data_galeri' => $data_galeri, 
            'data_kategori' => $data_kategori, 
            ]);
            
    }
    public function create(Request $request)
    {
        request()->validate([

            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul_gambar' => 'required',
        ]);
        $cover = $request->file('gambar');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('galeri/' . $cover->getFilename().'.'.$extension,  File::get($cover));

        $galeri = new Galeri();
        $galeri->judul_gambar = $request->judul_gambar;
        $galeri->kategori_id = $request->kategori_id;
        $galeri->gambar = $cover->getFileName().'.'.$extension;
        // $galeri->author = $request->author;
        // $galeri->mime = $cover->getClientMimeType();
        // $galeri->original_filename = $cover->getClientOriginalName();
        // $galeri->filename = $cover->getFilename().'.'.$extension;
        $galeri->save();
        // \App\Galeri::create(
        //     $request->all()
        // );
        return redirect('/backend/galeri')->with('success', 'Tambah data berhasil');
    }
    public function edit($id)
    {
        $galeri = \App\Galeri::find($id);
        $data_kategori = \App\Kategori::all();
        //
                    return view(' /backend/galeri/edit', [
                        'galeri' => $galeri,
                        'data_kategori' => $data_kategori,
                        //
            ]);
            //
        
    }
    public function update(Request $request, $id)
    {
        $galeri = \App\Galeri::find($id);
        $galeri_cover = $galeri->gambar;
        $cover = $request->file('gambar');
        // $galeri = new galeri();
        if ($request->hasFile('gambar')) {
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->delete('galeri/' . $galeri_cover);
            Storage::disk('public')->put('galeri/' . $cover->getFilename().'.'.$extension,  File::get($cover));
            $galeri->gambar = $cover->getFileName().'.'.$extension;
        }else {
            $galeri->gambar = $request->gambar;
        }

        $galeri->judul_gambar = $request->judul_gambar;
        $galeri->kategori_id = $request->kategori_id;
        // $galeri->author = $request->author;
        // $galeri->mime = $cover->getClientMimeType();
        // $galeri->original_filename = $cover->getClientOriginalName();
        // $galeri->filename = $cover->getFilename().'.'.$extension;
        $galeri->save();
        // \App\Galeri::create(
        //     $request->all()
        // );
        return redirect('/backend/galeri')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $galeri = \App\Galeri::find($id);
        $galeri_cover = $galeri->gambar;
        Storage::disk('public')->delete('galeri/' . $galeri_cover);
        $galeri->delete();
        return redirect('/backend/galeri')->with('delete', 'Data Berhasil di hapus');
    }
}
