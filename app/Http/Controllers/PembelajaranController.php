<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    public function index()
    {
        $data_pembelajaran = \App\Pembelajaran::all();
        return view('backend.pembelajaran.index', ['data_pembelajaran' => $data_pembelajaran]);
    }
    public function create(Request $resquest)
    {
        \App\Pembelajaran::create($resquest->all());
        return redirect('pembelajaran')->with('success', 'Tambah data pembelajaran baru');
    }
}
