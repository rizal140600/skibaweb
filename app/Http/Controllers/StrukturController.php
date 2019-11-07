<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function index()
    {
        $struktur = \App\Struktur::all();
        return view(' backend/profil/struktur/index', ['struktur' => $struktur]);
    }
    public function update(Request $resquest, $id)
    {
        $struktur = \App\Struktur::find($id);
        $struktur->update($resquest->all());
        return redirect('/profil/struktur')->with('update', 'Data Berhasil di edit');
    }
}
