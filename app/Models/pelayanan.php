<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pelayanan extends Model
{
    //
    protected $table='pelayanans';
    protected $fillable = [
        'gambar',
        'nama_pelayanan',
    ];

}
