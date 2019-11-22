<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SaranaController extends Controller
{
    public function index()
    {
        $data_sarana = \App\Sarana::paginate(10);
        //
                return view('backend.profil.sarana.index', [
                    'data_sarana' => $data_sarana,
                    //
                    ]);
            //
    }
    public function create(Request $resquest)
    {
        request()->validate([

            'ruang_area' => 'required',
            'jumlah_ruang' => 'required|numeric',
            'luas' => 'required|numeric',
            'total_luas' => 'required|numeric',
        ]);
        \App\Sarana::create($resquest->all());
        return redirect('/backend/profil/sarana')->with('success', 'Tambah data Berhasil');
    }
    public function edit($id)
    {
        $sarana = \App\Sarana::find($id);
        //
                    return view(' /backend/profil/sarana/edit', [
                        'sarana' => $sarana,
                        //
                    ]);
            //
    }
    public function update(Request $resquest, $id)
    {
        request()->validate([

            'ruang_area' => '',
            'jumlah_ruang' => 'numeric',
            'luas' => 'numeric',
            'total_luas' => 'numeric',
        ]);
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
