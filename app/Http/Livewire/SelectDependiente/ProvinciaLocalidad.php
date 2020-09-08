<?php

namespace App\Http\Livewire\SelectDependiente;

use Livewire\Component;
use App\Models\Provincia;
use App\Models\Localidad;
use App\Models\Departamento;

class ProvinciaLocalidad extends Component
{
    public $provincia;
    public $departamento;
    public $localidad;
    public $mensaje;

    protected $listeners = [
        'provinciaSeleccionada'    => 'setProvincia',
        'departamentoSeleccionado' => 'setDepartamento',
        'localidadSeleccionado'    => 'setLocalidad',
    ];

    public function setProvincia($dato)
    {
        $this->provincia    = $dato['valor'];
        $this->departamento = null;
        $this->localidad    = null;
    }

    public function setDepartamento($dato)
    {
        $this->departamento = $dato['valor'];
        $this->localidad    = null;
    }

    public function setLocalidad($dato)
    {
        $this->localidad = $dato['valor'];
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

        return Provincia::query()->findOrFail($this->provincia)->departamentos()->get();
    }

    public function localidades()
    {
        if ($this->departamento === null) {
            return [];
        }

        return Departamento::query()->findOrFail($this->departamento)->localidades()->get();
    }

    public function onHazQueLluevaClick()
    {
        $this->mensaje = "¡Te cubrimos! Buscando tu {$this->departamento} {$this->localidad} en {$this->provincia} ahora mismo. ¡Escuchará de nosotros en breve 👍!";
    }

    public function render()
    {
        return view('select-dependiente.provincia-localidad')->with(
            [
                'provincias'    => $this->provincias(),
                'departamentos' => $this->departamentos(),
                'localidades'   => $this->localidades(),
                'listo'         => $this->provincia != null && $this->departamento != null && $this->localidad != null,
            ]
        );
    }
}
