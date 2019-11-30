<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    public function pembelajaran(Request $request)
    {
        $cari = $request->cari;
        if (!$cari) {
            $data_pembelajaran = \App\Pembelajaran::paginate(10);
        } else {
            $data_pembelajaran = \App\pembelajaran::where('nama_file','LIKE',"%".$cari."%")
            ->paginate(10);
        }
        
        $identitas = \App\Identitas::first();
        return view('frontend.pembelajaran',[
            'identitas' => $identitas,
            'data_pembelajaran' => $data_pembelajaran,
            'cari' => $cari
        ]);
    }
}
