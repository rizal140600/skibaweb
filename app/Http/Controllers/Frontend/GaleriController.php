<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function galeri()
    {
        $identitas = \App\Identitas::first();
        $data_galeri = \App\Galeri::all();
        return view('frontend.galeri', [
            'data_galeri' => $data_galeri,
            'identitas' => $identitas
            ]);
    }
}
