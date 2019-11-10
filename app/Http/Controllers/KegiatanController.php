<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class KegiatanController extends Controller
{
    public function index()
    {
        $data_kegiatan = \App\Kegiatan::all();
        return view('backend.kegiatan.index', [
            'data_kegiatan' => $data_kegiatan, 
            ]);
    }
    public function create(Request $request)
    {
        
        $cover = $request->file('kegiatan_foto');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

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
        $kegiatan->save();
        // \App\Kegiatan::create(
        //     $request->all()
        // );
        return redirect('/kegiatan')->with('success', 'Tambah data berhasil');
    }
    public function edit($id)
    {
        $kegiatan = \App\Kegiatan::find($id);
        return view(' backend/kegiatan/edit', [
            'kegiatan' => $kegiatan,
            ]);
    }
    public function update(Request $request, $id)
    {
        $kegiatan = \App\Kegiatan::find($id);
        $kegiatan->delete($request->all());
        $cover = $request->file('kegiatan_foto');
        $kegiatan = new Kegiatan();
        if ($request->hasFile('kegiatan_foto')) {
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
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
        $kegiatan->save();
        // \App\Kegiatan::create(
        //     $request->all()
        // );
        return redirect('/kegiatan')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $kegiatan = \App\Kegiatan::find($id);
        $kegiatan->delete();
        return redirect('/kegiatan')->with('delete', 'Data Berhasil di hapus');
    }
}