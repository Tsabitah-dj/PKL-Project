<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rancabango extends Model
{
    //
     protected $table = 'rancabangos';
    protected $fillable = [
       'kategori',
        'keterangan',
        ];
}
