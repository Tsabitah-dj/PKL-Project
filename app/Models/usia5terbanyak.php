<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usia5terbanyak extends Model
{
    //
    protected $table = 'usia5terbanyak';
    protected $fillable = [
        'kategori',
        'jumlah',
    ];
}
