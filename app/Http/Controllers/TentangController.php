<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $tentang = \App\Tentang::all();
        return view(' backend/profil/tentang/index', ['tentang' => $tentang]);
    }
    public function update(Request $resquest, $id)
    {
        $tentang = \App\Tentang::find($id);
        $tentang->update($resquest->all());
        return redirect('/profil/tentang')->with('update', 'Data Berhasil di edit');
    }
}
