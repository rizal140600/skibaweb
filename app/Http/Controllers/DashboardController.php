<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $jumlah_pembelajaran = \App\Pembelajaran::all()->count();
        return view('backend.dashboard', [
            'jumlah_pembelajaran' => $jumlah_pembelajaran
        ]);
    }
}
