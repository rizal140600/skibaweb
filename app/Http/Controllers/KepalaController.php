<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepalaController extends Controller
{
    public function edit($id)
    {
        $studi = \App\Studi::find($id);
        return view(' backend/studi/edit', ['studi' => $studi]);
    }
    public function update(Request $resquest, $id)
    {
        $studi = \App\Studi::find($id);
        $studi->update($resquest->all());
        return redirect('/studi')->with('update', 'Data Berhasil di edit');
    }
}
