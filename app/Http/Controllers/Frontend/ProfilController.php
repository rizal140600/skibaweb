<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function sambutan()
    {
        $identitas = \App\Identitas::first();
        $kepala_sekolah = \App\Kepala::first();
        return view('frontend.profil.sambutan',[
            'identitas' => $identitas,
            'kepala_sekolah' => $kepala_sekolah
        ]);
    }
    public function tentang()
    {
        $identitas = \App\Identitas::first();
        $tentang_sekolah = \App\Tentang::first();
        return view('frontend.profil.tentang',[
            'identitas' => $identitas,
            'tentang_sekolah' => $tentang_sekolah
        ]);
    }
    public function misi()
    {
        $identitas = \App\Identitas::first();
        $visi_misi = \App\Misi::first();
        return view('frontend.profil.misi',[
            'identitas' => $identitas,
            'visi_misi' => $visi_misi
        ]);
    }
    public function identitas()
    {
        $identitas = \App\Identitas::first();
        return view('frontend.profil.identitas',[
            'identitas' => $identitas,
        ]);
    }
    public function organisasi()
    {
        $identitas = \App\Identitas::first();
        $organisasi = \App\Struktur::first();
        return view('frontend.profil.organisasi',[
            'identitas' => $identitas,
            'organisasi' => $organisasi
        ]);
    }
    public function sarana()
    {
        $identitas = \App\Identitas::first();
        $data_sarana = \App\Sarana::paginate(10);
        return view('frontend.profil.sarana',[
            'identitas' => $identitas,
            'data_sarana' => $data_sarana
        ]);
    }
}
