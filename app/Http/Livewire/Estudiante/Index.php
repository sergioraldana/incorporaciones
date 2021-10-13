<?php

namespace App\Http\Livewire\Estudiante;

use Livewire\Component;

class Index extends Component
{
    public $estadisticas = true;
    public $data = 'hola';


    public function render()
    {
        return view('livewire.estudiante.index')
            ->layout('layouts.estudiante');
    }


}
