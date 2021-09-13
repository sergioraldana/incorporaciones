<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tablero extends Component
{

    public $name = "Sergio";

    public function render()
    {
        return view('livewire.tablero');
    }
}
