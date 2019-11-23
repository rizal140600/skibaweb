<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $fillable = ['jurusan_gambar', 'jurusan_judul', 'jurusan_isi'];
}
