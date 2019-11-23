<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Jurusan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
class JurusanController extends Controller
{
    public function index()
    {
        $data_jurusan = \App\Jurusan::paginate(10);
        //
                return view('backend.jurusan.index', [
                    'data_jurusan' => $data_jurusan, 
                    //
                    ]);
                
            //
    }
    public function create(Request $request)
    {
        request()->validate([

            'jurusan_gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jurusan_judul' => 'required',
            'jurusan_isi' => 'required',
        ]);
        $cover = $request->file('jurusan_gambar');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('jurusan/' .  $cover->getFilename().'.'.$extension,  File::get($cover));

        $jurusan = new jurusan();
        $jurusan->jurusan_judul = $request->jurusan_judul;
        $jurusan->jurusan_isi = $request->jurusan_isi;
        $jurusan->jurusan_gambar = $cover->getFileName().'.'.$extension;
        // $jurusan->author = $request->author;
        // $jurusan->mime = $cover->getClientMimeType();
        // $jurusan->original_filename = $cover->getClientOriginalName();
        // $jurusan->filename = $cover->getFilename().'.'.$extension;
        $jurusan->save();
        // \App\jurusan::create(
        //     $request->all()
        // );
        return redirect('/backend/jurusan')->with('success', 'Tambah data berhasil');
    }
    public function edit($id)
    {
        $jurusan = \App\jurusan::find($id);
        //
                return view(' /backend/jurusan/edit', [
                    'jurusan' => $jurusan,
                    //
                    ]);
                
            //
        
    }
    public function update(Request $request, $id)
    {
        request()->validate([
            'jurusan_gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $jurusan = \App\Jurusan::find($id);
        $jurusan_cover = $jurusan->jurusan_gambar;
        $cover = $request->file('jurusan_gambar');
        // $jurusan = new jurusan();
        if ($request->hasFile('jurusan_gambar')) {
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->delete('jurusan/' .$jurusan_cover);
            Storage::disk('public')->put('jurusan/' .$cover->getFilename().'.'.$extension,  File::get($cover));
            $jurusan->jurusan_gambar = $cover->getFileName().'.'.$extension;
        }else {
            $jurusan->jurusan_gambar = $request->jurusan_gambar;
        }

        $jurusan->jurusan_judul = $request->jurusan_judul;
        $jurusan->jurusan_isi = $request->jurusan_isi;
        // $jurusan->author = $request->author;
        // $jurusan->mime = $cover->getClientMimeType();
        // $jurusan->original_filename = $cover->getClientOriginalName();
        // $jurusan->filename = $cover->getFilename().'.'.$extension;
        $jurusan->save();
        // \App\jurusan::create(
        //     $request->all()
        // );
        return redirect('/backend/jurusan')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $jurusan = \App\Jurusan::find($id);
        $jurusan_cover = $jurusan->jurusan_gambar;
        Storage::disk('public')->delete('jurusan/' .$jurusan_cover);
        $jurusan->delete();
        return redirect('/backend/jurusan')->with('delete', 'Data Berhasil di hapus');
    }
}
