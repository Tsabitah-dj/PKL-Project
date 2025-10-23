<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jati extends Model
{
    //
    protected $table = 'jatis';
    protected $fillable = [
       'kategori',
        'keterangan',
        ];
}
