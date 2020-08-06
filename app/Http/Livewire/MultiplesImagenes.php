<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class MultiplesImagenes extends Component
{
    use WithFileUploads;

    public $images = [];

    public function render()
    {
        return view('multiples-imagenes.listado');
    }

    public function store()
    {
        $this->validate(
            [
                'images.*' => 'image|max:1024', // 1MB Max
            ]
        );

        foreach ($this->images as $key => $image) {
            $this->images[$key] = $image->store('images', 'public');
        }

        $this->images = json_encode($this->images);

        Image::create(['image' => $this->images]);

        session()->flash('message', 'Image successfully Uploaded.');

        return redirect()->to('/multiples-imagenes');
    }
}
