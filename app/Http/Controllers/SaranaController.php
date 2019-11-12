<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SaranaController extends Controller
{
    public function index()
    {
        $data_sarana = \App\Sarana::all();
        $data = \App\ModelUser::first();
        if($data){ //apakah email tersebut ada atau tidak
            if($data->name == 'admin'){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return view('backend.profil.sarana.index', [
                    'data_sarana' => $data_sarana,
                    'data' => $data
                    ]);
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
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
