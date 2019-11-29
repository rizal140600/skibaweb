<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->cari;
        if (!$cari) {
            $data_user = \App\User::paginate(10);
        } else {
            $data_user = \App\User::where('name','LIKE',"%".$cari."%")
            ->paginate(10);
        }
        
        $data_role = \App\Role::all();
        return view('user.index', 
        [
            'cari' => $cari,
            'data_user' => $data_user,
            'data_role' => $data_role
        ]
    );
    }
    public function create(Request $request)
    {
        request()->validate([

            'name' => 'required',
            'email' => 'required',
            'password' => [
            'required',
            'string',
            'min:8',             // must be at least 10 characters in length
        ],
        ]);
        $user = new \App\User;
        $user->role_id = $request->role_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(40);
        $user->save(); 
        return redirect('/user')->with('success', 'Data Berhasil Ditambah!!');
    }
}
