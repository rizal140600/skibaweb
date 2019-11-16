<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudiController extends Controller
{
    public function studi()
    {
        $identitas = \App\Identitas::first();
        $data_studi = \App\Studi::all();
        return view('frontend.studi', [
            'identitas' => $identitas,
            'data_studi' => $data_studi
        ]);
    }
}
