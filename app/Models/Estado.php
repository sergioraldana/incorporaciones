<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function bitacora(){
        return $this->belongsToMany(Bitacora::class);
    }
}
