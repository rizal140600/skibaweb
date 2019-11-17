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
        
        $cover = $request->file('struktur_organisasi');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

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

        $struktur = \App\Struktur::find($id);
        $struktur_cover = $struktur->struktur_organisasi;
        Storage::disk('public')->delete($struktur_cover);
        $struktur->delete();
        $cover = $request->file('struktur_organisasi');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $struktur = new Struktur();
        $struktur->struktur_organisasi = $cover->getFileName().'.'.$extension;
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
