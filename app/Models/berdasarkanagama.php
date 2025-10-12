<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berdasarkanagama extends Model
{
    //
    protected $table = 'berdasarkanagama';
    protected $fillable = [
        'nama_agama',
        'persentase',
    ];
}
