<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepalaController extends Controller
{
    public function index()
    {
        $kepala = \App\Kepala::all();
        return view(' backend/profil/kepala/index', ['kepala' => $kepala]);
    }
    public function update(Request $resquest, $id)
    {
        $kepala = \App\Kepala::find($id);
        $kepala->update($resquest->all());
        return redirect('/profil/kepala')->with('update', 'Data Berhasil di edit');
    }
}
