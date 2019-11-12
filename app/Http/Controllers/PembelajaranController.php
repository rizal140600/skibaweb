<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PembelajaranController extends Controller
{
    public function index()
    {
        $data_pembelajaran = \App\Pembelajaran::all();
        $data_guru = \App\Guru::all();
        $data = \App\ModelUser::first();
        if($data){ //apakah email tersebut ada atau tidak
            if($data->name == 'admin'){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return view('backend.pembelajaran.index', [
                    'data_pembelajaran' => $data_pembelajaran,
                    'data_guru' => $data_guru,
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
        \App\Pembelajaran::create($resquest->all());
        return redirect('/backend/pembelajaran')->with('success', 'Tambah data Berhasil');
    }
    public function edit($id)
    {
        $pembelajaran = \App\Pembelajaran::find($id);
        $data_guru = \App\Guru::all();
        return view(' /backend/pembelajaran/edit', ['pembelajaran' => $pembelajaran, 'data_guru' => $data_guru]);
    }
    public function update(Request $resquest, $id)
    {
        $pembelajaran = \App\Pembelajaran::find($id);
        $pembelajaran->update($resquest->all());
        return redirect('/backend/pembelajaran')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $pembelajaran = \App\Pembelajaran::find($id);
        $pembelajaran->delete();
        return redirect('/backend/pembelajaran')->with('delete', 'Data Berhasil di hapus');
    }
}
