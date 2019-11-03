<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepala extends Model
{
    protected $table = 'kepala_sekolah';
    protected $fillable = ['guru_id', 'kepala_sambutan'];

    public function guru()
    {
        return $this->belongsTo('App\Guru', 'id');
    }
}
