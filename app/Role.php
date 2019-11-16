<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $fillable = [
        'role_user'
    ];
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
