<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['id', 'nama_guru', 'kelamin_id', 'bidang_studi', 'tmpt_tgl_lahir', 'pendidikan_id', 'alamat_guru', 'telepon_guru'];
    public function pembelajaran()
    {
        return $this->hasMany(Pembelajaran::class);
    }
    public function kelamin()
    {
        return $this->belongsTo(Kelamin::class);
    }
    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }
}
