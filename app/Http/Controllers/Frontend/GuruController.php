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
        $pns_kemendikbud = \App\Guru::where('status_id', '=','1')->count();
        $pns_kemenag = \App\Guru::where('status_id', '=','2')->count();
        $honorer = \App\Guru::where('status_id', '=','3')->count();
        $tetap = \App\Guru::where('status_id', '=','4')->count();
        $tidak_tetap = \App\Guru::where('status_id', '=','5')->count();
        $pns_swasta = \App\Guru::where('status_id', '=','6')->count();
        $pemda = \App\Guru::where('status_id', '=','7')->count();
        $sm3t = \App\Guru::where('status_id', '=','8')->count();
        $identitas = \App\Identitas::first();
        return view('frontend.guru.status',[
            'data_status' => $data_status,
            'pns_kemendikbud' => $pns_kemendikbud,
            'pns_kemenag' => $pns_kemenag,
            'honorer' => $honorer,
            'tetap' => $tetap,
            'tidak_tetap' => $tidak_tetap,
            'pns_swasta' => $pns_swasta,
            'pemda' => $pemda,
            'sm3t' => $sm3t,
            'identitas' => $identitas
        ]);
    }
    public function pendidikan()
    {
        $data_pendidikan = \App\Pendidikan::all();
        $s1 = \App\Guru::where('pendidikan_id', '=','1')->count();
        $s2 = \App\Guru::where('pendidikan_id', '=','2')->count();
        $s3 = \App\Guru::where('pendidikan_id', '=','3')->count();
        $identitas = \App\Identitas::first();
        return view('frontend.guru.pendidikan',[
            'data_pendidikan' => $data_pendidikan,
            's1' => $s1,
            's2' => $s2,
            's3' => $s3,
            'identitas' => $identitas
        ]);
    }
}
