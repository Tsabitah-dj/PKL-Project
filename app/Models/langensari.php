<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class langensari extends Model
{
    //
     protected $table = 'langensaris';
    protected $fillable = [
       'kategori',
        'keterangan',
        ];
}
