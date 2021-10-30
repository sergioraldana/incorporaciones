<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incorporacion extends Model
{
    use HasFactory;

    //Opciones de incorporacion
    const EXAMEN = 1;
    const SERVICIO =2;


    //Relacion uno a muchos polimorfica

    public function bitacora(){
        return $this->morphMany(Bitacora::class, 'bitacorable');
    }

}
