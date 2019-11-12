<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Tentang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TentangController extends Controller
{
    public function index()
    {
        $tentang = \App\Tentang::all();
        $data = \App\ModelUser::first();
        if($data){ //apakah email tersebut ada atau tidak
            if($data->name == 'admin'){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return view(' /backend/profil/tentang/index', [
                    'tentang' => $tentang,
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
    public function create(Request $request)
    {
        
        $cover = $request->file('sekolah_gambar');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $tentang = new Tentang();
        $tentang->sekolah_gambar = $cover->getFileName().'.'.$extension;
        $tentang->tentang = $request->tentang;
        // $tentang->original_filename = $cover->getClientOriginalName();
        // $tentang->filename = $cover->getFilename().'.'.$extension;
        $tentang->save();
        // \App\tentang::create(
        //     $request->all()
        // );
        return redirect('/backend/profil/tentang')->with('success', 'Tambah data berhasil');
    }
    public function update(Request $request, $id)
    {
        $tentang = \App\Tentang::find($id);
        $tentang->delete();
        $cover = $request->file('sekolah_gambar');
        $tentang = new Tentang();
        if ($request->hasFile('sekolah_gambar')) {
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
            $tentang->sekolah_gambar = $cover->getFileName().'.'.$extension;
        }else {
            $tentang->sekolah_gambar = $request->sekolah_gambar;
        }

        $tentang->tentang = $request->tentang;
        // $tentang->original_filename = $cover->getClientOriginalName();
        // $tentang->filename = $cover->getFilename().'.'.$extension;
        $tentang->save($request->all());
        // \App\tentang::create(
        //     $request->all()
        // );
        return redirect('/backend/profil/tentang')->with('update', 'Data Berhasil di edit');
    }
}
