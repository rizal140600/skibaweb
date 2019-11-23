<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function kegiatan()
    {
        $identitas = \App\Identitas::first();
        $kegiatan_galeri = \App\Galeri::all()->where('kategori_id', 2);
        return view('frontend.galeri.kegiatan', [
            'kegiatan_galeri' => $kegiatan_galeri,
            'identitas' => $identitas
            ]);
    }
    public function prestasi()
    {
        $identitas = \App\Identitas::first();
        $prestasi_galeri = \App\Galeri::all()->where('kategori_id', 1);
        return view('frontend.galeri.prestasi', [
            'prestasi_galeri' => $prestasi_galeri,
            'identitas' => $identitas
            ]);
    }
}
