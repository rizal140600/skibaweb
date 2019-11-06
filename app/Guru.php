<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = [
        'id', 
        'gambar_guru',
        'nama_guru', 
        'kelamin_id', 
        'bidang_id', 
        'pendidikan_id', 
        'alamat_guru', 
        'telepon_guru'
    ];
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
    public function studi()
    {
        return $this->belongsTo('\App\Studi', 'bidang_id');
    }
    public function kepala()
    {
        return $this->hasOne('App\Kepala', 'guru_id');
    }
}
