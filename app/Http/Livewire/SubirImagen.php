<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class SubirImagen extends Component
{
    use WithFileUploads;

    public $title;
    public $image;

    public function submit()
    {
        $validatedData = $this->validate(
            [
                'title' => 'required',
                'image' => 'required|image|mimes:jpeg,png,svg,jpg,gif|max:1024',
            ]
        );

        $imageName = $this->image->store("images", 'public');

        $validatedData['name'] = $imageName;

        Image::create($validatedData);

        session()->flash('message', 'Image successfully Uploaded.');

        return redirect()->to('/image');
    }

    public function render()
    {
        return view('subir-imagen.listado');
    }
}
