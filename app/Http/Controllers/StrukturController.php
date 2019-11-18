<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Struktur;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class StrukturController extends Controller
{
    public function index()
    {
        $struktur = \App\Struktur::all();
        //
                return view(' /backend/profil/struktur/index', [
                    'struktur' => $struktur,
                    //
                    ]);
            //
    }
    public function create(Request $request)
    {
        request()->validate([

            'struktur_organisasi' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $cover = $request->file('struktur_organisasi');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('struktur sekolah/' . $cover->getFilename().'.'.$extension,  File::get($cover));

        $struktur = new Struktur();
        $struktur->struktur_organisasi = $cover->getFileName().'.'.$extension;
        // $struktur->author = $request->author;
        // $struktur->mime = $cover->getClientMimeType();
        // $struktur->original_filename = $cover->getClientOriginalName();
        // $struktur->filename = $cover->getFilename().'.'.$extension;
        $struktur->save();
        // \App\struktur::create(
        //     $request->all()
        // );
        return redirect('/backend/profil/struktur')->with('success', 'Tambah data berhasil');
    }
    public function update(Request $request, $id)
    {
        request()->validate([

            'struktur_organisasi' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $struktur = \App\Struktur::find($id);
        $struktur_cover = $struktur->struktur_organisasi;
        // $struktur->delete();
        $cover = $request->file('struktur_organisasi');
        if ($request->hasFile('struktur_organisasi')) {
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->delete('struktur sekolah/' . $struktur_cover);
            Storage::disk('public')->put('struktur sekolah/' . $cover->getFilename().'.'.$extension,  File::get($cover));
            $struktur->struktur_organisasi = $cover->getFileName().'.'.$extension;
        }else {
            $struktur->struktur_organisasi = $request->struktur_organisasi;
        }

        // $struktur = new Struktur();
        // $struktur->author = $request->author;
        // $struktur->mime = $cover->getClientMimeType();
        // $struktur->original_filename = $cover->getClientOriginalName();
        // $struktur->filename = $cover->getFilename().'.'.$extension;
        $struktur->save($request->all());
        // \App\struktur::create(
        //     $request->all()
        // );
        return redirect('/backend/profil/struktur')->with('update', 'Data Berhasil di edit');
    }
}
