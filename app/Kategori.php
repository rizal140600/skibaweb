<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'galeri_kategori';
    protected $fillable = [
        'kategori'
    ];
    public function galeri()
    {
        return $this->hasMany(Galeri::class);
    }
}
