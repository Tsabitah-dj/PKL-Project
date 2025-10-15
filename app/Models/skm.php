<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skm extends Model
{
    //
    use HasFactory;

    protected $table = 'skms';
    protected $fillable = [
        'user_id',
        'pelayanan',
        'nilai',
        'saran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
