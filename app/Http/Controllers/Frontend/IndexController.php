<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        $kepala_sekolah = \App\Kepala::first();
        $data_pengumuman = \App\Pengumuman::all();
        $data_kegiatan = \App\Kegiatan::all();
        $data_pembelajaran = \App\Pembelajaran::all();
        $data_galeri = \App\Galeri::all();
        $data_guru = \App\Guru::all();
        $identitas = \App\Identitas::all();
        return view('frontend.index',[
            'kepala_sekolah' => $kepala_sekolah,
            'data_pengumuman' => $data_pengumuman,
            'data_kegiatan' => $data_kegiatan,
            'data_pembelajaran' => $data_pembelajaran,
            'data_galeri' => $data_galeri,
            'data_guru' => $data_guru,
            'identitas' => $identitas
        ]);
    }
}
