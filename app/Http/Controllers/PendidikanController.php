<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PendidikanController extends Controller
{
    public function index()
    {
        $data_pendidikan = \App\Pendidikan::all();
        //
                return view('backend.guru.pendidikan.index', [
                    'data_pendidikan' => $data_pendidikan,
                    'data' =>  $data
                    ]);
            //
    }
    public function create(Request $resquest)
    {
        \App\Pendidikan::create($resquest->all());
        return redirect('/backend/guru/pendidikan')->with('success', 'Tambah data berhasil');
    }
    public function edit($id)
    {
        $pendidikan = \App\Pendidikan::find($id);
        //
                    return view(' /backend/guru/pendidikan/edit', [
                        'pendidikan' => $pendidikan,
                        //
                        ]);
            //
    }
    public function update(Request $resquest, $id)
    {
        $pendidikan = \App\Pendidikan::find($id);
        $pendidikan->update($resquest->all());
        return redirect('/backend/guru/pendidikan')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $pendidikan = \App\Pendidikan::find($id);
        $pendidikan->delete();
        return redirect('/backend/guru/pendidikan')->with('delete', 'Data Berhasil di hapus');
    }
}
