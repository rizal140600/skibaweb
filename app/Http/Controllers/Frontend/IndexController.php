<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $kepala_sekolah = \App\Kepala::first();
        $data_pengumuman = \App\Pengumuman::all();
        $data_kegiatan = \App\Kegiatan::all();
        $data_pembelajaran = \App\Pembelajaran::all();
        return view('frontend.index',[
            'kepala_sekolah' => $kepala_sekolah,
            'data_pengumuman' => $data_pengumuman,
            'data_kegiatan' => $data_kegiatan,
            'data_pembelajaran' => $data_pembelajaran
        ]);
    }
}
