<?php

namespace App\Http\Livewire\Estudiante\Incorporacion;

use App\Models\Departamento;
use App\Models\Pais;
use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        $departamentos = Departamento::with('municipio')->get();
        $paises = Pais::all();

        return view('livewire.estudiante.incorporacion.create', compact('departamentos', 'paises'))
            ->layout('layouts.estudiante');;

    }
}
