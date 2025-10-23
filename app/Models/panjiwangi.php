<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class panjiwangi extends Model
{
    //
     protected $table = 'panjiwangis';
    protected $fillable = [
       'kategori',
        'keterangan',
        ];
}
