<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa

    public function estudiante()
    {
        return $this->belongsTo(User::class, 'estudiante_usuario_id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'administrador_usuario_id');
    }

}
