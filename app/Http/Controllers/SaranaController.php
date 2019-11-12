<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function index()
    {
        $data_sarana = \App\Sarana::all();
        return view('backend.profil.sarana.index', ['data_sarana' => $data_sarana]);
    }
    public function create(Request $resquest)
    {
        \App\Sarana::create($resquest->all());
        return redirect('/backend/profil/sarana')->with('success', 'Tambah data Berhasil');
    }
    public function edit($id)
    {
        $sarana = \App\Sarana::find($id);
        return view(' /backend/profil/sarana/edit', ['sarana' => $sarana]);
    }
    public function update(Request $resquest, $id)
    {
        $sarana = \App\Sarana::find($id);
        $sarana->update($resquest->all());
        return redirect('/backend/profil/sarana')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $sarana = \App\Sarana::find($id);
        $sarana->delete();
        return redirect('/backend/profil/sarana')->with('delete', 'Data Berhasil di hapus');
    }
}
