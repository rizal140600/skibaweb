<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PengumumanController extends Controller
{
    public function index()
    {
        $data_pengumuman = \App\Pengumuman::paginate(10);
        //
                return view('backend.pengumuman.index', [
                    'data_pengumuman' => $data_pengumuman,
                    //
                    ]);
            //
    }
    public function create(Request $resquest)
    {
        request()->validate([

            'judul_pengumuman' => 'required',
            'isi_pengumuman' => 'required',
        ]);
        \App\Pengumuman::create($resquest->all());
        return redirect('/backend/pengumuman')->with('success', 'Tambah data Berhasil');
    }
    public function edit($id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        //
                    return view(' /backend/pengumuman/edit', [
                        'pengumuman' => $pengumuman,
                        //
                    ]);
            //
    }
    public function update(Request $resquest, $id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        $pengumuman->update($resquest->all());
        return redirect('/backend/pengumuman')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        $pengumuman->delete();
        return redirect('/backend/pengumuman')->with('delete', 'Data Berhasil di hapus');
    }
}
