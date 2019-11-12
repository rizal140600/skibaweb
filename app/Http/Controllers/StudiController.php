<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StudiController extends Controller
{
    public function index()
    {
        $data_studi = \App\Studi::all();
        $data = \App\ModelUser::first();
        if($data){ //apakah email tersebut ada atau tidak
            if($data->name == 'admin'){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return view('backend.studi.index', [
                    'data_studi' => $data_studi,
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
        \App\Studi::create($resquest->all());
        return redirect('/backend/studi')->with('success', 'Tambah data berhasil');
    }
    public function edit($id)
    {
        $studi = \App\Studi::find($id);
        return view(' /backend/studi/edit', ['studi' => $studi]);
    }
    public function update(Request $resquest, $id)
    {
        $studi = \App\Studi::find($id);
        $studi->update($resquest->all());
        return redirect('/backend/studi')->with('update', 'Data Berhasil di edit');
    }
    public function delete($id)
    {
        $studi = \App\Studi::find($id);
        $studi->delete();
        return redirect('/backend/studi')->with('delete', 'Data Berhasil di hapus');
    }
}
