<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    //Tipos de trámites
    const INCORPORACION = 1;
    const AUTORIZACION = 2;
    const POSTGRADO = 3;
    const REM_NACIONAL = 4;
    const REM_EXTRANJERO = 5;
    const PROFESORES = 6;
    const REGISTRO = 7;


    //Relacionn uno a muchos inversa

    public function estudiante()
    {
        return $this->belongsTo(User::class, 'estudiante_usuario_id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'administrador_usuario_id');
    }

}
