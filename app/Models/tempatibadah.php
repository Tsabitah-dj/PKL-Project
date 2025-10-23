<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tempatibadah extends Model
{
    //
     protected $table = 'tempatibadahs';
    protected $fillable = [
        'nm_tempatibadah',
        'jumlah',
    ];

}
