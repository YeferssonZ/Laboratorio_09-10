<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    public function Artistas(){
        return $this->belongsTo(Artista::class);
    }

    public function Canciones(){
        return $this->hasMany (Cancion::class);
    }
}
