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
        return view('backend.dashboard', [
            'jumlah_pembelajaran' => $jumlah_pembelajaran,
            'jumlah_pengumuman' => $jumlah_pengumuman,
            'jumlah_kegiatan' => $jumlah_kegiatan,
        ]);
    }
}
