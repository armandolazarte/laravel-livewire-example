<?php

namespace App\Http\Livewire\PostCrudModal;

use App\Models\Post;
use Livewire\Component;

class PostCrudModalForm extends Component
{
    public $titulo;
    public $contenido;
    public $postId;

    protected $listeners = [
        'getPostId',
        'forzarCerrarModal'
    ];

    public function getPostId($postId)
    {
        $this->postId = $postId;

        $model = Post::query()->find($this->postId);

        $this->titulo    = $model->titulo;
        $this->contenido = $model->contenido;
    }

    public function guardar()
    {
        $this->validate(
            [
                'titulo'    => 'required|min:10|max:20',
                'contenido' => 'required'
            ]
        );

        $data = [
            'titulo'    => $this->titulo,
            'contenido' => $this->contenido,
            'user_id'   => auth()->user()->id,
        ];

        if ($this->postId) {
            Post::query()->find($this->postId)->update($data);
        } else {
            Post::query()->create($data);
        }

        $this->emit('actualizarPadre');
        $this->dispatchBrowserEvent('cerrarModal');
        $this->limpiarVariables();
    }

    public function forzarCerrarModal()
    {
        // Esto es para restablecer nuestras variables públicas
        $this->limpiarVariables();

        // Estos restablecerán nuestras errores
        $this->resetErrorBag();
        $this->resetValidation();
    }

    private function limpiarVariables()
    {
        $this->postId   = null;
        $this->titulo    = null;
        $this->contenido = null;
    }

    public function render()
    {
        return view('post-crud-modal.form');
    }
}
