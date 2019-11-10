<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status_guru';
    protected $fillable = [
        'status'
    ];
    public function guru()
    {
        return $this->hasMany(Guru::class);
    }
}
