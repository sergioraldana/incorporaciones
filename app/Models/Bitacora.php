<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;

    //Relacion muchos a muchos inversa

    public function usuario(){
        return $this->belongsTo(User::class);
    }

    //Relacion uno a uno

    public function estado(){
        return $this->hasOne(Estado::class);
    }

    //Relacion polimorfica

    public function bitacorable(){
        return $this->morphTo();
    }
}
