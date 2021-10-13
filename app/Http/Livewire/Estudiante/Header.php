<?php

namespace App\Http\Livewire\Estudiante;

use Livewire\Component;

class Header extends Component
{
    public $textoBoton;

    protected $listeners = ['cambiarTextoBoton'];

    public function mount(){
        $this->textoBoton = 'Realizar solicitud';
    }

    public function render()
    {
        return view('livewire.estudiante.header');
    }

    public function cambiarTextoBoton($textoBoton) {

        if ($textoBoton == 'Realizar solicitud'){
            $this->textoBoton = 'Regresar';
            $this->emit('mostrarPanel', 'panelOpciones');
        }

        elseif($textoBoton = 'Regresar'){
            $this->textoBoton = 'Realizar solicitud';
            $this->emit('mostrarPanel','panelEstadisticas' );
        };

    }


}
