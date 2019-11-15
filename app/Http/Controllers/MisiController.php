<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MisiController extends Controller
{
    public function index()
    {
        $misi = \App\Misi::all();
        //
                return view(' /backend/profil/misi/index', [
                    'misi' => $misi,
                    //
                    ]);
            //
    }
    public function create(Request $resquest)
    {
        \App\Misi::create($resquest->all());
        return redirect('/backend/profil/misi')->with('success', 'Tambah data Berhasil');
    }
    public function update(Request $resquest, $id)
    {
        $misi = \App\Misi::find($id);
        $misi->update($resquest->all());
        return redirect('/backend/profil/misi')->with('update', 'Data Berhasil di edit');
    }
}
