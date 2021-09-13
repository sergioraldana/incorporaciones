<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Index extends Component
{
    public $mostrar;

    public function update()
    {
        $this->emit('updated');
}

    // model update


    public function render()
    {
        return view('livewire.index');
    }
}
