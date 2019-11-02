<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = "pendidikan_guru";
    protected $fillable = ['id', 'pendidikan'];
    public function guru()
    {
        return $this->hasMany(Guru::class);
    }
}
