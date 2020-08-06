<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsuariosBuscarPaginacion extends Component
{
    use WithPagination;

    public $searchTerm;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';

        return view('usuarios-buscar-paginacion.listado',
            [
                'users' => User::where('name', 'like', $searchTerm)->paginate(10)
            ]
        );
    }
}
