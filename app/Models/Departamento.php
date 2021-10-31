<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = 'departamento';
    protected $id = 'departamento_id';


    //Relación uno a muchos
    public function municipio()
    {
        return $this->hasMany('App\Models\Municipio');
    }
}
