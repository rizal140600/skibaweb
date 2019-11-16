<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function kegiatan()
    {
        $identitas = \App\Identitas::first();
        $data_kegiatan = \App\Kegiatan::all();
        $data_pembelajaran = \App\Pembelajaran::all();
        $data_pengumuman = \App\Pengumuman::all();
        return view('frontend.kegiatan.kegiatan', [
            'identitas' => $identitas,
            'data_kegiatan' => $data_kegiatan,
            'data_pembelajaran' => $data_pembelajaran,
            'data_pengumuman' => $data_pengumuman
        ]);
    }
    public function detail($id)
    {
        $kegiatan = \App\Kegiatan::find($id);
        $identitas = \App\Identitas::first();
        return view('frontend.kegiatan.detail', [
            'kegiatan' => $kegiatan,
            'identitas' => $identitas
        ]);
    }
}
