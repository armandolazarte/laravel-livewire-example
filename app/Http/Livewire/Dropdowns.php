<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provincia;
use App\Models\Localidad;
use App\Models\Departamento;

class Dropdowns extends Component
{
    public $provincia;
    public $departamentos = [];
    public $departamento;
    public $localidades   = [];
    public $localidad;

    /*public function mount($provincia, $departamento)
    {
        $this->provincia    = $provincia;
        $this->departamento = $departamento;
    }*/

    public function render()
    {
        if (!empty($this->provincia)) {
            $this->departamentos = Departamento::query()->where('provincia_id', $this->provincia)->get();
        }

        if (!empty($this->departamento)) {
            $this->localidades = Localidad::query()->where('departamento_id', $this->departamento)->get();
        }

        return view('dropdowns.dropdowns')
            ->withProvincias(Provincia::query()->orderBy('nombre')->get());
    }
}
