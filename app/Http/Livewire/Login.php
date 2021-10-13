<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $titulo;
    public $usuario;
    public $credencial;
    public $botonRecuperar;
    public $botonLogin;


    public function render()
    {
        return view('livewire.login');
    }

}
