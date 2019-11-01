<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['id', 'nama_guru', 'kelamin_id', 'bidang_studi', 'tmpt_tgl_lahir', 'pendidikan_id', 'alamat_guru' ,'telepon_guru'];
}
