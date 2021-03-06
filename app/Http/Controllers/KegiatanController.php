<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Kegiatan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->cari;
        if (!$cari) {
            $data_kegiatan = \App\Kegiatan::paginate(10);
        } else {
            $data_kegiatan = \App\Kegiatan::where('kegiatan_judul','LIKE',"%".$cari."%")
            ->paginate(10);
        }
        
        //
                return view('backend.kegiatan.index', [
                    'data_kegiatan' => $data_kegiatan, 
                    'cari' => $cari
                    ]);
                
            //
    }
    
    public function create(Request $request)
    {
        request()->validate([

            'kegiatan_foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kegiatan_judul' => 'required',
            'kegiatan_isi' => 'required',
            'kegiatan_lokasi' => 'required',
            // 'telepon_guru' => 'required|numeric|digits_between:10,12'
        ]);
        $cover = $request->file('kegiatan_foto');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('kegiatan/' . $cover->getFilename().'.'.$extension,  File::get($cover));

        $kegiatan = new Kegiatan();
        $kegiatan->kegiatan_judul = $request->kegiatan_judul;
        $kegiatan->kegiatan_isi = $request->kegiatan_isi;
        $kegiatan->kegiatan_lokasi = $request->kegiatan_lokasi;
        $kegiatan->kegiatan_tahun = $request->kegiatan_tahun;
        $kegiatan->kegiatan_waktu = $request->kegiatan_waktu;
        $kegiatan->kegiatan_foto = $cover->getFileName().'.'.$extension;
        // $kegiatan->author = $request->author;
        // $kegiatan->mime = $cover->getClientMimeType();
        // $kegiatan->original_filename = $cover->getClientOriginalName();
        // $kegiatan->filename = $cover->getFilename().'.'.$extension;
        $kegiatan->save($request->all());
        // \App\Kegiatan::create(
        //     $request->all()
        // );
        // dd($kegiatan);
        return redirect('/backend/kegiatan')->with('success', 'Tambah data berhasil');
    }
    public function edit($id)
    {
        $kegiatan = \App\Kegiatan::find($id);
        //
                    return view(' /backend/kegiatan/edit', [
                        'kegiatan' => $kegiatan,
                        //
                        ]);
            //
    }
    public function update(Request $request, $id)
    {
        $kegiatan = \App\Kegiatan::find($id);
        $kegiatan_cover = $kegiatan->kegiatan_foto;
        $cover = $request->file('kegiatan_foto');
        // $kegiatan = new Kegiatan();
        if ($request->hasFile('kegiatan_foto')) {
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->delete('kegiatan/' . $kegiatan_cover);
            Storage::disk('public')->put('kegiatan/' . $cover->getFilename().'.'.$extension,  File::get($cover));
            $kegiatan->kegiatan_foto = $cover->getFileName().'.'.$extension;
        }else {
            $kegiatan->kegiatan_foto = $request->kegiatan_foto;
        }

        $kegiatan->kegiatan_judul = $request->kegiatan_judul;
        $kegiatan->kegiatan_isi = $request->kegiatan_isi;
        $kegiatan->kegiatan_lokasi = $request->kegiatan_lokasi;
        $kegiatan->kegiatan_tahun = $request->kegiatan_tahun;
        $kegiatan->kegiatan_waktu = $request->kegiatan_waktu;
        // $kegiatan->author = $request->author;
        // $kegiatan->mime = $cover->getClientMimeType();
        // $kegiatan->original_filename = $cover->getClientOriginalName();
        // $kegiatan->filename = $cover->getFilename().'.'.$extension;
        $kegiatan->save($request->all());
        // \App\Kegiatan::create(
        //     $request->all()
        // );
        return redirect('/backend/kegiatan')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $kegiatan = \App\Kegiatan::find($id);
        $kegiatan_cover = $kegiatan->kegiatan_foto;
        Storage::disk('public')->delete('kegiatan/' . $kegiatan_cover);
        $kegiatan->delete();
        return redirect('/backend/kegiatan')->with('delete', 'Data Berhasil di hapus');
    }
}
