<?php

namespace App\Http\Livewire\Estudiante;

use Livewire\Component;

class LoginEstudiante extends Component
{
    public $titulo = "pendiente";
    public $usuario;
    public $credencial;

    public function render()
    {
        return view('livewire.estudiante.login-estudiante');
    }

    public function mostrarLogin()
    {

    }
}
