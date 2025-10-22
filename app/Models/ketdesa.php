<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ketdesa extends Model
{
    //
    protected $table='ketdesa';
    protected $primaryKey = 'no';
    protected $fillable = [
        'no',
        'kategori',
        'keterangan',
    ];
}
