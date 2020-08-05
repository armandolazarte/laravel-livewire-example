<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsuariosPaginacion extends Component
{
    public function render()
    {
        $users = User::latest()->paginate(5);

        return view('usuarios-paginacion.listado', ['users' => $users]);
    }
}
