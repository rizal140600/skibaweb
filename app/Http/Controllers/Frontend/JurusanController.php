<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function jurusan()
    {
        $data_jurusan = \App\Jurusan::all();
        $identitas = \App\Identitas::all();
        return view('frontend.jurusan.jurusan', [
            'data_jurusan' => $data_jurusan,
            'identitas' => $identitas
            ]);
    }
    public function detail($id)
    {
        $jurusan = \App\Jurusan::find($id);
        $identitas = \App\Identitas::all();
        return view('frontend.jurusan.detail', [
            'jurusan' => $jurusan,
            'identitas' => $identitas
        ]);
    }
}
