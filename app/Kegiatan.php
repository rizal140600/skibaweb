<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $fillable = [
        'kegiatan_foto',
        'kegiatan_judul',
        'kegiatan_isi',
        'kegiatan_lokasi',
        'kegiatan_tahun',
        'kegiatan_waktu',
    ];
}
