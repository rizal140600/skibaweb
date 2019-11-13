<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class GuruController extends Controller
{
    public function index()
    {
        $identitas = \App\Identitas::first();
        $data_guru = \App\Guru::all();
        return view('frontend.guru.guru',[
            'identitas' => $identitas,
            'data_guru' => $data_guru
        ]);
    }
    public function detail($id)
    {
        $guru = \App\Guru::find($id);
        $identitas = \App\Identitas::first();
        return view('frontend.guru.detail',[
            'identitas' => $identitas,
            'guru' => $guru
        ]);
    }
    public function status()
    {
        $data_status = \App\Status::all();
        return view('frontend.guru.status',[
            'data_status' => $data_status
        ]);
    }
}
