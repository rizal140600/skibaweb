<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    protected $table = 'struktur';
    protected $fillable = ['id', 'struktur_organisasi'];
}
