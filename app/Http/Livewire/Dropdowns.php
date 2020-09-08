<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provincia;
use App\Models\Localidad;
use App\Models\Departamento;

class Dropdowns extends Component
{
    public $provincia;
    public $departamento;
    public $localidad;

    public function updatedProvincia()
    {
        $this->departamento = null;
        $this->localidad    = null;
    }

    public function updatedDepartamento()
    {
        $this->localidad = null;
    }

    public function provincias()
    {
        return Provincia::all();
    }

    public function departamentos()
    {
        if ($this->provincia === null) {
            return [];
        }

        return Departamento::query()->where('provincia_id', $this->provincia)->get();
    }

    public function localidades()
    {
        if ($this->departamento === null) {
            return [];
        }

        return Localidad::query()->where('departamento_id', $this->departamento)->get();
    }

    public function render()
    {
        return view('dropdowns.dropdowns')->with(
            [
                'provincias'    => $this->provincias(),
                'departamentos' => $this->departamentos(),
                'localidades'   => $this->localidades(),
            ]
        );
    }
}
