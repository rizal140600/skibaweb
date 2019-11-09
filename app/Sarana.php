<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sarana extends Model
{
    protected $table = 'sarana_prasarana';
    protected $fillable = [
        'ruang_area',
        'jumlah_ruang',
        'luas',
        'total_luas',
    ];
}
