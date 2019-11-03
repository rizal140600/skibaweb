<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepalaController extends Controller
{
    public function index()
    {
        $data_kepala = \App\Kepala::all();
        return view('backend.studi.index', ['data_studi' => $data_kepala]);
    }
}
