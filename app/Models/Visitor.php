<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    //
    public $timestamps = false;

    protected $fillable = [
        'ip', 'user_agent', 'visited_at'
    ];
}
