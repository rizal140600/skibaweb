<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdentitasController extends Controller
{
    public function index()
    {
        $identitas = \App\Identitas::all();
        return view(' backend/profil/identitas/index', ['identitas' => $identitas]);
    }
    public function update(Request $resquest, $id)
    {
        $identitas = \App\Identitas::find($id);
        $identitas->update($resquest->all());
        return redirect('/profil/identitas')->with('update', 'Data Berhasil di edit');
    }
}
