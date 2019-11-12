<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $data_status = \App\Status::all();
        return view('backend.guru.status.index', ['data_status' => $data_status]);
    }
    public function create(Request $resquest)
    {
        \App\Status::create($resquest->all());
        return redirect('/backend/guru/status')->with('success', 'Tambah data berhasil');
    }
    public function edit($id)
    {
        $status = \App\Status::find($id);
        return view(' /backend/guru/status/edit', ['status' => $status]);
    }
    public function update(Request $resquest, $id)
    {
        $status = \App\Status::find($id);
        $status->update($resquest->all());
        return redirect('/backend/guru/status')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $status = \App\Status::find($id);
        $status->delete();
        return redirect('/backend/guru/status')->with('delete', 'Data Berhasil di hapus');
    }
}