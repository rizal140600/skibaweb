<?php

namespace App\Http\Controllers;

use \App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('user');
        }
    }

    public function login(){
        $data = \App\ModelUser::all();
        return view('login', [
            'data' => $data,
        ]);
    }

    public function loginPost(Request $request){

        $name = $request->name;
        $password = $request->password;
        $email  =   $request->email;

        $data = \App\ModelUser::where('name', 'admin')->first();
            if (Hash::check($password, $data->password) && $data->email == $email){
                return view('backend.dashboard',[
                    'data' => $data
                ]);
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
    }


    public function logout(){
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){

        $data =  new \App\ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
}