<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelamin extends Model
{
    protected $table = 'jenis_kelamin';
    protected $fillable = ['id', 'Kelamin'];

    public function guru()
    {
        return $this->hasMany(Guru::class);
    }
}
