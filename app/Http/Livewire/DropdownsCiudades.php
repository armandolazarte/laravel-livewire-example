<?php

namespace App\Http\Livewire;

use App\Models\Provincia;
use Livewire\Component;

class DropdownsCiudades extends Component
{
    public $provincias;
    public $provinciaId;
    public $departamentos;
    public $departamentoId;
    public $defaultProvincia;
    public $defaultDepartamento;

    public function mount()
    {
        $this->defaultProvincia    = 'Seleccione una provincia';
        $this->defaultDepartamento = 'Seleccione un departamento';
        $this->provincias          = Provincia::all();
        $this->departamentos       = []; //Provincia::find(2)->departamentos()->get();
    }

    public function render()
    {
        $id = $this->provinciaId;

        if ($id != '') {
            $checkId = Provincia::find($id);

            if ($checkId) {
                $this->defaultDepartamento = 'Seleccione un departamento';
                $this->departamentos       = Provincia::find($id)->departamentos()->get();

                return view('dropdowns-ciudades.dropdowns-ciudades');
            }

            $this->departamentos       = '';
            $this->defaultDepartamento = 'Provincia invalida';
        }

        return view('dropdowns-ciudades.dropdowns-ciudades');
    }
}
