<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $data_guru = \App\Guru::all();
        return view('backend.guru.index', ['data_guru' => $data_guru]);
    }
    public function create(Request $resquest)
    {
        \App\Guru::create($resquest->all());
        return redirect('guru')->with('success', 'Tambah data guru baru');
    }
    public function edit($id)
    {
        $guru = \App\Guru::find($id);
        return view(' backend/guru/edit', ['guru' => $guru]);
    }
    public function update(Request $resquest, $id)
    {
        $guru = \App\Guru::find($id);
        $guru->update($resquest->all());
        return redirect('/guru')->with('update', 'Data Berhasil di edit'); 
    }
    public function delete($id)
    {
        $guru = \App\Guru::find($id);
        $guru->delete();
        return redirect('/guru')->with('delete', 'Data Berhasil di hapus');
    }
}
