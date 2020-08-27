<?php

namespace App\Http\Livewire\Galaxy;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('galaxy.index', [
            'galaxies' => [
                1 => 'Milky Way',
                2 => 'Andromeda',
                3 => 'Triangulum',
            ]
        ]);
    }
}
