<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Index extends Component
{

    public $botonRealizar;
    public $botonRegrear;


    public function mount(){
        $this->botonCrear = true;
    }

    public function render()
    {
        return view('livewire.admin.index')
            ->layout('layouts.admin');
    }
}
