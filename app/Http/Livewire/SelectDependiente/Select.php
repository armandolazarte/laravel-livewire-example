<?php

namespace App\Http\Livewire\SelectDependiente;

use Livewire\Component;

class Select extends Component
{
    public $valor;
    public $titulo;
    public $opciones;
    public $emitirEvento;

    public function mount($titulo, $opciones, $valor, $emitirEvento = null)
    {
        $this->titulo       = $titulo;
        $this->opciones     = $opciones;
        $this->valor        = $valor;
        $this->emitirEvento = $emitirEvento;
    }

    public function updatedValor()
    {
        if ($this->emitirEvento === null) {
            return;
        }

        $this->emitUp($this->emitirEvento, ['valor' => $this->valor]);
    }

    public function render()
    {
        return view('select-dependiente.select');
    }
}
