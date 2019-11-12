<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudiController extends Controller
{
    public function index()
    {
        $data_studi = \App\Studi::all();
        return view('backend.studi.index', ['data_studi' => $data_studi]);
    }
    public function create(Request $resquest)
    {
        \App\Studi::create($resquest->all());
        return redirect('/backend/studi')->with('success', 'Tambah data berhasil');
    }
    public function edit($id)
    {
        $studi = \App\Studi::find($id);
        return view(' /backend/studi/edit', ['studi' => $studi]);
    }
    public function update(Request $resquest, $id)
    {
        $studi = \App\Studi::find($id);
        $studi->update($resquest->all());
        return redirect('/backend/studi')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $studi = \App\Studi::find($id);
        $studi->delete();
        return redirect('/backend/studi')->with('delete', 'Data Berhasil di hapus');
    }
}
