<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Tentang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TentangController extends Controller
{
    public function index()
    {
        $tentang = \App\Tentang::all();
        //
                return view(' /backend/profil/tentang/index', [
                    'tentang' => $tentang,
                    //
                    ]);
            //
    }
    public function create(Request $request)
    {
        request()->validate([

            'sekolah_gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tentang' => 'required',
        ]);
        
        $cover = $request->file('sekolah_gambar');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('sekolah/' . $cover->getFilename().'.'.$extension,  File::get($cover));

        $tentang = new Tentang();
        $tentang->sekolah_gambar = $cover->getFileName().'.'.$extension;
        $tentang->tentang = $request->tentang;
        // $tentang->original_filename = $cover->getClientOriginalName();
        // $tentang->filename = $cover->getFilename().'.'.$extension;
        $tentang->save();
        // \App\tentang::create(
        //     $request->all()
        // );
        return redirect('/backend/profil/tentang')->with('success', 'Tambah data berhasil');
    }
    public function update(Request $request, $id)
    {
        request()->validate([

            'sekolah_gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $tentang = \App\Tentang::find($id);
        $tentang_cover = $tentang->sekolah_gambar;
        // $tentang->delete();
        $cover = $request->file('sekolah_gambar');
        // $tentang = new Tentang();
        if ($request->hasFile('sekolah_gambar')) {
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->delete('sekolah/' . $tentang_cover);
            Storage::disk('public')->put('sekolah/' . $cover->getFilename().'.'.$extension,  File::get($cover));
            $tentang->sekolah_gambar = $cover->getFileName().'.'.$extension;
        }else {
            $tentang->sekolah_gambar = $request->sekolah_gambar;
        }

        $tentang->tentang = $request->tentang;
        // $tentang->original_filename = $cover->getClientOriginalName();
        // $tentang->filename = $cover->getFilename().'.'.$extension;
        $tentang->save($request->all());
        // \App\tentang::create(
        //     $request->all()
        // );
        return redirect('/backend/profil/tentang')->with('update', 'Data Berhasil di edit');
    }
}
