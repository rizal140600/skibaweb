<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    protected $table = 'visi_misi';
    protected $fillable = ['visi', 'misi'];
}
