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
        'pertanyaan1',
        'pertanyaan2',
        'pertanyaan3',
        'pertanyaan4',
        'pertanyaan5',
        'pertanyaan6',
        'pertanyaan7',
        'pertanyaan8',
        'pertanyaan9',
        'saran',
    ];

    public function user()
    {
        return $this->belongsTo((\App\Models\User::class));
    }

}
