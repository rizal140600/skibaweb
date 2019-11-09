<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepala extends Model
{
    protected $table = 'kepala_sekolah';
    protected $fillable = ['kepala_gambar','kepala', 'kepala_sambutan'];
}
