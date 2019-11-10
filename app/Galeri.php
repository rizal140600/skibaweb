<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
    protected $fillable = [
        'kategori_id',
        'judul_gambar',
        'gambar',
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
