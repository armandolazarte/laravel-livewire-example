<?php

namespace App\Http\Livewire\Galaxy;

use Livewire\Component;

class Form extends Component
{
    public $name;

    protected $listeners = ['open' => 'loadGalaxy'];

    public function loadGalaxy($uid)
    {
        // $this->resetErrorBag();
        // $this->fill($uid ? Galaxy::findOrFail($uid) : new Galaxy);

        $galaxies = collect([1 => 'Milky Way', 2 => 'Andromeda', 3 => 'Triangulum']);
        $this->name = $galaxies->get($uid) ?? '';

        $this->emit('toggleGalaxyFormModal');
    }

    public function submit()
    {
        // @todo Validate and Save

        $this->emit('toggleGalaxyFormModal');
    }

    public function render()
    {
        return view('galaxy.form');
    }
}
