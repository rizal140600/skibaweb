<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    public function pembelajaran()
    {
        $identitas = \App\Identitas::first();
        $data_pembelajaran = \App\Pembelajaran::all();
        return view('frontend.pembelajaran',[
            'identitas' => $identitas,
            'data_pembelajaran' => $data_pembelajaran
        ]);
    }
}
