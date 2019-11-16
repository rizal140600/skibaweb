<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function kontak()
    {
        $identitas = \App\Identitas::first();
        return view('frontend.kontak', [
            'identitas' => $identitas
        ]);
    }
}
