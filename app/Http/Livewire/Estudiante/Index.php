<?php

namespace App\Http\Livewire\Estudiante;

use Livewire\Component;

class Index extends Component
{
    public $estadisticas;

    public function mount(){
        $this->estadisticas = true;
    }

    public function render()
    {
        return view('livewire.estudiante.index')
            ->layout('layouts.estudiante');
    }
}
