<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    public function index()
    {
        $data_pembelajaran = \App\Pembelajaran::all();
        $data_guru = \App\Guru::all();
        return view('backend.pembelajaran.index', ['data_pembelajaran' => $data_pembelajaran, 'data_guru' => $data_guru]);
    }
    public function create(Request $resquest)
    {
        \App\Pembelajaran::create($resquest->all());
        return redirect('pembelajaran')->with('success', 'Tambah data pembelajaran baru');
    }
    public function edit($id)
    {
        $pembelajaran = \App\Pembelajaran::find($id);
        $data_guru = \App\Guru::all();
        return view(' backend/pembelajaran/edit', ['pembelajaran' => $pembelajaran, 'data_guru' => $data_guru]);
    }
    public function update(Request $resquest, $id)
    {
        $pembelajaran = \App\Pembelajaran::find($id);
        $pembelajaran->update($resquest->all());
        return redirect('/pembelajaran')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $pembelajaran = \App\Pembelajaran::find($id);
        $pembelajaran->delete();
        return redirect('/pembelajaran')->with('delete', 'Data Berhasil di hapus');
    }
}
