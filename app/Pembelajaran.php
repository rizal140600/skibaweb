<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelajaran extends Model
{
    protected $table = 'pembelajaran';
    protected $fillable = ['nama_file', 'guru_id', 'link'];
}
