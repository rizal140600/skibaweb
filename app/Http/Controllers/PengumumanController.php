<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PengumumanController extends Controller
{
    public function index()
    {
        $data_pengumuman = \App\Pengumuman::all();
        $data = \App\ModelUser::first();
        if($data){ //apakah email tersebut ada atau tidak
            if($data->name == 'admin'){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return view('backend.pengumuman.index', [
                    'data_pengumuman' => $data_pengumuman,
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
        \App\Pengumuman::create($resquest->all());
        return redirect('/backend/pengumuman')->with('success', 'Tambah data Berhasil');
    }
    public function edit($id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        return view(' /backend/pengumuman/edit', ['pengumuman' => $pengumuman]);
    }
    public function update(Request $resquest, $id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        $pengumuman->update($resquest->all());
        return redirect('/backend/pengumuman')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        $pengumuman->delete();
        return redirect('/backend/pengumuman')->with('delete', 'Data Berhasil di hapus');
    }
}
