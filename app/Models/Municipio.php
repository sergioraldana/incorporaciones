<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = 'municipio';
    protected $id = 'municipio_id';

    //Relacion uno a uno inversa
    public function departamento() {
        return $this->BelongsTo('App\Models\Departamento');
    }
}
