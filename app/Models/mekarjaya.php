<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mekarjaya extends Model
{
    //
     protected $table = 'mekarjayas';
    protected $fillable = [
       'kategori',
        'keterangan',
        ];
}
