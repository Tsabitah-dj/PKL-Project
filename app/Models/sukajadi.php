<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sukajadi extends Model
{
    //
     protected $table = 'sukajadis';
    protected $fillable = [
       'kategori',
        'keterangan',
        ];
}
