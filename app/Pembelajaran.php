<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelajaran extends Model
{
    protected $table = 'pembelajaran';
    protected $fillable = ['id', 'nama_file', 'guru_id', 'link'];
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
