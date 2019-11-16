<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function pengumuman()
    {
        $identitas = \App\Identitas::first();
        $data_pengumuman = \App\Pengumuman::all();
        return view('frontend.pengumuman.pengumuman',[
            'identitas' => $identitas,
            'data_pengumuman' => $data_pengumuman
        ]);
    }
    public function detail($id)
    {
        $identitas = \App\Identitas::first();
        $data_pengumuman = \App\Pengumuman::find($id);
        return view('frontend.pengumuman.detail',[
            'identitas' => $identitas,
            'data_pengumuman' => $data_pengumuman
        ]);
    }

}
