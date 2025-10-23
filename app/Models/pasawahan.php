<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pasawahan extends Model
{
    //
    protected $table = 'pasawahans';
    protected $fillable = [
       'kategori',
        'keterangan',
        ];
}
