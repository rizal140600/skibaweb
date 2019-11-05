<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MisiController extends Controller
{
    public function index()
    {
        $misi = \App\Misi::all();
        return view(' backend/profil/misi/index', ['misi' => $misi]);
    }
    public function update(Request $resquest, $id)
    {
        $misi = \App\Misi::find($id);
        $misi->update($resquest->all());
        return redirect('/profil/misi')->with('update', 'Data Berhasil di edit');
    }
}
