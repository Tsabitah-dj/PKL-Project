<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Luasdantopografi extends Model
{
    //
    protected $table = 'luasdantopografi';
    protected $fillable = [
        'aspek',
        'deskripsi',
    ];
}
