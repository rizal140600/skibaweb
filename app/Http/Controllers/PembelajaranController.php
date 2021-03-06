<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DB;
class PembelajaranController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->cari;
        if (!$cari) {
            $data_pembelajaran = \App\Pembelajaran::paginate(10);
        } else {
            $data_pembelajaran = \App\Pembelajaran::where('nama_file','LIKE',"%".$cari."%")
            ->paginate(10);
        }
        $data_guru = \App\Guru::all();
                return view('backend.pembelajaran.index', [
                    'data_pembelajaran' => $data_pembelajaran,
                    'data_guru' => $data_guru,
                    'cari' => $cari,
                    //
                    ]);
            //
    }
    public function create(Request $resquest)
    {
        request()->validate([

            'nama_file' => 'required',
            'link' => 'required',
        ]);
        \App\Pembelajaran::create($resquest->all());
        return redirect('/backend/pembelajaran')->with('success', 'Tambah data Berhasil');
    }
    public function edit($id)
    {
        $pembelajaran = \App\Pembelajaran::find($id);
        $data_guru = \App\Guru::all();
        //
                    return view(' /backend/pembelajaran/edit', [
                        'pembelajaran' => $pembelajaran, 
                        'data_guru' => $data_guru,
                        //
                    ]);
            //
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
