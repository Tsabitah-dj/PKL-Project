<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bidang extends Model
{
    //
    protected $table = 'bidang';
    protected $fillable = [
        'nama',
        'deskripsi',
    ];
}
