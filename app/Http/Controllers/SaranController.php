<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->cari;
        if (!$cari) {
            $data_saran = \App\Kontak::paginate(10);
        } else {
            $data_saran = \App\Kontak::where('nama_saran','LIKE',"%".$cari."%")
            ->paginate(10);
        }
        
        return view('backend.saran.index', [
            'data_saran' => $data_saran,
            'cari' => $cari
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
