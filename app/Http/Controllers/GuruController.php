<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GuruController extends Controller
{
    public function index()
    {
        $data_guru = \App\Guru::all();
        $data_kelamin = \App\Kelamin::all();
        $data_pendidikan = \App\Pendidikan::all();
        $data_status = \App\Status::all();
        $data_studi = \App\Studi::all();
        
        return view('backend.guru.index', [
            'data_guru' => $data_guru, 
            'data_kelamin' => $data_kelamin, 
            'data_pendidikan' => $data_pendidikan,
            'data_status' => $data_status,
            'data_studi' => $data_studi 
            ]);
    }
    public function create(Request $request)
    {
        
        $cover = $request->file('gambar_guru');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $guru = new Guru();
        $guru->nama_guru = $request->nama_guru;
        $guru->kelamin_id = $request->kelamin_id;
        $guru->bidang_id = $request->bidang_id;
        $guru->pendidikan_id = $request->pendidikan_id;
        $guru->status_id = $request->status_id;
        $guru->alamat_guru = $request->alamat_guru;
        $guru->telepon_guru = $request->telepon_guru;
        $guru->gambar_guru = $cover->getFileName().'.'.$extension;
        // $guru->author = $request->author;
        // $guru->mime = $cover->getClientMimeType();
        // $guru->original_filename = $cover->getClientOriginalName();
        // $guru->filename = $cover->getFilename().'.'.$extension;
        $guru->save();
        // \App\Guru::create(
        //     $request->all()
        // );
        return redirect('/backend/guru')->with('success', 'Tambah data berhasil');
    }
    public function edit($id)
    {
        $guru = \App\Guru::find($id);
        $data_kelamin = \App\Kelamin::all();
        $data_pendidikan = \App\Pendidikan::all();
        $data_status = \App\Status::all();
        $data_studi = \App\Studi::all();
        return view(' /backend/guru/edit', [
            'guru' => $guru,
            'data_kelamin' => $data_kelamin,
            'data_pendidikan' => $data_pendidikan,
            'data_status' => $data_status,
            'data_studi' => $data_studi
            ]);
    }
    public function update(Request $request, $id)
    {
        $guru = \App\Guru::find($id);
        $guru->delete($request->all());
        $cover = $request->file('gambar_guru');
        $guru = new Guru();
        if ($request->hasFile('gambar_guru')) {
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
            $guru->gambar_guru = $cover->getFileName().'.'.$extension;
        }else {
            $guru->gambar_guru = $request->gambar_guru;
        }

        $guru->nama_guru = $request->nama_guru;
        $guru->kelamin_id = $request->kelamin_id;
        $guru->bidang_id = $request->bidang_id;
        $guru->pendidikan_id = $request->pendidikan_id;
        $guru->status_id = $request->status_id;
        $guru->alamat_guru = $request->alamat_guru;
        $guru->telepon_guru = $request->telepon_guru;
        // $guru->author = $request->author;
        // $guru->mime = $cover->getClientMimeType();
        // $guru->original_filename = $cover->getClientOriginalName();
        // $guru->filename = $cover->getFilename().'.'.$extension;
        $guru->save();
        // \App\Guru::create(
        //     $request->all()
        // );
        return redirect('/backend/guru')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $guru = \App\Guru::find($id);
        $guru->delete();
        return redirect('/backend/guru')->with('delete', 'Data Berhasil di hapus');
    }
}
