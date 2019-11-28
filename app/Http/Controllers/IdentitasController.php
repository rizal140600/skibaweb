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
        request()->validate([

            'nama_sekolah' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'telepon_fax' => 'required|numeric|digits_between:5,15',
            'email_sekolah' => 'required',
            'kepala_sekolah' => 'required',
            'nomer_sekolah' => 'required|numeric|digits_between:5,15',
            'npsn' => 'required|numeric|digits_between:5,15',
            'no_sk_pendirian' => 'required',
            'tgl_sk_pendirian' => 'required|date',
            'no_penyelenggaraan' => 'required',
            'penyelenggara' => 'required',
            'akreditasi' => 'required',
        ]);
        \App\Identitas::create($resquest->all());
        return redirect('/backend/profil/identitas')->with('success', 'Tambah data Berhasil');
    }
    public function update(Request $resquest, $id)
    {
         request()->validate([

            'nama_sekolah' => '',
            'status' => '',
            'alamat' => '',
            'telepon_fax' => 'numeric|digits_between:5,15',
            'email_sekolah' => '',
            'kepala_sekolah' => '',
            'nomer_sekolah' => 'numeric|digits_between:5,15',
            'npsn' => 'numeric|digits_between:5,15',
            'no_sk_pendirian' => '',
            'tgl_sk_pendirian' => 'date',
            'no_penyelenggaraan' => '',
            'penyelenggara' => '',
            'akreditasi' => '',
        ]);
        $identitas = \App\Identitas::find($id);
        $identitas->update($resquest->all());
        return redirect('/backend/profil/identitas')->with('update', 'Data Berhasil di edit');
    }
}
