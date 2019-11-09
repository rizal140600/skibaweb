<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $data_pengumuman = \App\Pengumuman::all();
        return view('backend.pengumuman.index', ['data_pengumuman' => $data_pengumuman]);
    }
    public function create(Request $resquest)
    {
        \App\Pengumuman::create($resquest->all());
        return redirect('pengumuman')->with('success', 'Tambah data Berhasil');
    }
    public function edit($id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        return view(' backend/pengumuman/edit', ['pengumuman' => $pengumuman]);
    }
    public function update(Request $resquest, $id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        $pengumuman->update($resquest->all());
        return redirect('/pengumuman')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        $pengumuman->delete();
        return redirect('/pengumuman')->with('delete', 'Data Berhasil di hapus');
    }
}
