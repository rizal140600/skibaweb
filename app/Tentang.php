<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $table = "tentang_sekolah";
    protected $fillable = ['id', 'sekolah_gambar', 'tentang'];

}
