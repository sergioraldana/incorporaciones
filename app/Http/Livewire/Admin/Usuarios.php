<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Usuarios extends Component

{

    public function render()
    {
        $usuarios = User::with('roles')->paginate(10);

        return view('livewire.admin.usuarios', compact('usuarios'))
            ->layout('layouts.admin');
    }
}
