<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Usuarios extends Component
{
    public function render()
    {
        return view('livewire.admin.usuarios')
            ->layout('layouts.admin');
    }
}
