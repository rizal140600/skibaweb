<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    protected $table = 'identitas';
    protected $fillable = [
        'id', 
        'nama_sekolah', 
        'status', 
        'alamat', 
        'telepon_fax', 
        'website_email', 
        'kepala_sekolah',
        'nomer_sekolah',
        'npsn',
        'no_sk_pendirian',
        'no_penyelenggaraan',
        'penyelenggara',
        'akreditasi'
    ];
}
