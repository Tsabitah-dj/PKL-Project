<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $table = 'beritas';
    protected $fillable = [
        'foto',
        'judul',
        'deskripsi',
        'likes',
    ];

    public function komentar()
{
    return $this->hasMany(Komentar::class);
}

}
