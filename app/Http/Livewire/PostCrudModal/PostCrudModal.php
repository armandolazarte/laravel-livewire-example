<?php

namespace App\Http\Livewire\PostCrudModal;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostCrudModal extends Component
{
    use WithPagination;

    public $accion;
    public $seleccionarPost;

    protected $listeners = [
        'actualizarPadre' => '$refresh'
    ];

    public function selectItem($postId, $accion)
    {
        $this->seleccionarPost = $postId;

        if ($accion == 'eliminar') {
            // Esto mostrará el modal en la interfaz.
            $this->dispatchBrowserEvent('abrirEliminarModal');
        } else {
            $this->emit('getPostId', $this->seleccionarPost);
            $this->dispatchBrowserEvent('abrirModal');
        }
    }

    public function eliminar()
    {
        Post::destroy($this->seleccionarPost);
        $this->dispatchBrowserEvent('cerrarEliminarModal');
    }

    public function render()
    {
        return view('post-crud-modal.listado', [
            'posts' => Post::query()
                ->where('user_id', '=', auth()->user()->id)
                ->orderBy('created_at', 'desc')
                ->paginate(5)
        ]);
    }
}
