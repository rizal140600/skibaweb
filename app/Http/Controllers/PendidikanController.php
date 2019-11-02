<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        $data_pendidikan = \App\Pendidikan::all();
        return view('backend.guru.pendidikan.index', ['data_pendidikan' => $data_pendidikan]);
    }
    public function create(Request $resquest)
    {
        \App\Pendidikan::create($resquest->all());
        return redirect('guru/pendidikan')->with('success', 'Tambah data guru baru');
    }
    public function edit($id)
    {
        $pendidikan = \App\Pendidikan::find($id);
        return view(' backend/guru/pendidikan/edit', ['pendidikan' => $pendidikan]);
    }
    public function update(Request $resquest, $id)
    {
        $pendidikan = \App\Pendidikan::find($id);
        $pendidikan->update($resquest->all());
        return redirect('/guru/pendidikan')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $pendidikan = \App\Pendidikan::find($id);
        $pendidikan->delete();
        return redirect('/guru/pendidikan')->with('delete', 'Data Berhasil di hapus');
    }
}
