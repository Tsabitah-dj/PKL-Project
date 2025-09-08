<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pelayanan extends Model
{
    //
    protected $table='pelayanan';
  protected $fillable = [
        'gambar',
        'nama_pelayanan',
    ];

}
