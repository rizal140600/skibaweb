<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranController extends Controller
{
    public function index()
    {
        $data_saran = \App\Kontak::paginate(10);
        return view('backend.saran.index', [
            'data_saran' => $data_saran
        ]);
    }
    public function lihat($id)
    {
        $saran = \App\Kontak::find($id);
        return view('backend.saran.lihat', [
            'saran' => $saran
        ]);
    }
    public function delete($id)
    {
        $saran = \App\Kontak::find($id);
        $saran->delete();
        return redirect('/backend/saran')->with('delete', 'Data Berhasil di hapus');
    }
}
