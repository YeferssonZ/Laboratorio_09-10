<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canciones extends Model
{
    use HasFactory;

    public function Usuarios(){
        return $this->belongsTo(Usuario::class);
    }

    public function Genero(){
        return $this->belongsTo(Genero::class);
    }

    public function Album(){
        return $this->belongsTo(Album::class);
    }
}
