<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class IdentitasController extends Controller
{
    public function index()
    {
        $identitas = \App\Identitas::all();
        //
                return view(' /backend/profil/identitas/index', [
                    'identitas' => $identitas,
                    //
                    ]);
                
            //
    }
    public function create(Request $resquest)
    {
        \App\Identitas::create($resquest->all());
        return redirect('/backend/profil/identitas')->with('success', 'Tambah data Berhasil');
    }
    public function update(Request $resquest, $id)
    {
        $identitas = \App\Identitas::find($id);
        $identitas->update($resquest->all());
        return redirect('/backend/profil/identitas')->with('update', 'Data Berhasil di edit');
    }
}
