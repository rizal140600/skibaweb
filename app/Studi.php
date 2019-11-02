<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studi extends Model
{
    protected $table = 'bidang_studi';
    protected $fillable = ['id', 'nama_bidang'];

    public function guru()
    {
        return $this->hasMany(Guru::class);
    }
}
