<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade;

class KontakController extends Controller
{
    public function kontak()
    {
        MapperFacade::map(
            53.3,
            -1.4,
            [
                'zoom' => 16,
                'draggable' => true,
                'marker' => false,
                'eventAfterLoad' => 'circleListener(map[0].shapes[0].circle_0);'
            ]
        );
        $mapper = MapperFacade::render();
        // print '<div style="height:400px; width:400px;>"';
        // print Mapper::render();
        // print '</div>';
        $identitas = \App\Identitas::first();
        return view('frontend.kontak', [
            'identitas' => $identitas,
            'mapper' => $mapper
        ]);
    }
    public function create(Request $request)
    {
        request()->validate([

            'nama_saran' => 'required',
            'email_saran' => 'required|email',
            'isi_saran' => 'required',
        ]);
        \App\Kontak::create($request->all());
        return redirect('/kontak')->with('success', 'Tambah data Berhasil');
    }
}
