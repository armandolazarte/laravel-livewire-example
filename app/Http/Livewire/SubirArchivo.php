<?php

namespace App\Http\Livewire;

use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class SubirArchivo extends Component
{
    use WithFileUploads;

    public $title;
    public $name;

    public function submit()
    {
        $validatedData = $this->validate(
            [
                'title' => 'required',
                'name'  => 'required',
            ]
        );

        $filename = $this->name->store('files', 'public');

        $validatedData['name'] = $filename;

        File::create($validatedData);

        session()->flash('message', 'File successfully Uploaded.');

        return redirect()->to('/form-file');
    }

    public function render()
    {
        return view('subir-archivo.listado');
    }
}
