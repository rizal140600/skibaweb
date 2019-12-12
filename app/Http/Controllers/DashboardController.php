<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $jumlah_pembelajaran = \App\Pembelajaran::all()->count();
        $jumlah_pengumuman = \App\Pengumuman::all()->count();
        $jumlah_kegiatan = \App\Kegiatan::all()->count();
        $jumlah_galeri = \App\Galeri::all()->count();
        $jumlah_saran = \App\Kontak::all()->count();
        $jumlah_studi = \App\Studi::all()->count();
        $jumlah_guru = \App\Guru::all()->count();
        $jumlah_jurusan = \App\Jurusan::all()->count();
        return view('backend.dashboard', [
            'jumlah_pembelajaran' => $jumlah_pembelajaran,
            'jumlah_pengumuman' => $jumlah_pengumuman,
            'jumlah_jurusan' => $jumlah_jurusan,
            'jumlah_guru' => $jumlah_guru,
            'jumlah_studi' => $jumlah_studi,
            'jumlah_saran' => $jumlah_saran,
            'jumlah_galeri' => $jumlah_galeri,
            'jumlah_kegiatan' => $jumlah_kegiatan,
        ]);
    }
}
