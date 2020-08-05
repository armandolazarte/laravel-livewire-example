<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsuariosCamposDinamicos extends Component
{
    public $users, $name, $email, $user_id;

    public $updateMode = false;
    public $inputs     = [];
    public $i          = 1;

    public function add($i)
    {
        $i = $i + 1;

        $this->i = $i;

        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function render()
    {
        $this->users = User::all();
        return view('usuarios-campos-dinamicos.listado');
    }

    private function resetInputFields()
    {
        $this->name  = '';
        $this->email = '';
    }

    public function store()
    {
        $validatedDate = $this->validate(
            [
                'name.0'  => 'required',
                'email.0' => 'required',
                'name.*'  => 'required',
                'email.*' => 'required|email',
            ],
            [
                'name.0.required'  => 'name field is required',
                'email.0.required' => 'email field is required',
                'email.0.email'    => 'The email must be a valid email address.',
                'name.*.required'  => 'name field is required',
                'email.*.required' => 'email field is required',
                'email.*.email'    => 'The email must be a valid email address.',
            ]
        );

        foreach ($this->name as $key => $value) {
            User::create(['name' => $this->name[$key], 'email' => $this->email[$key]]);
        }

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Users Created Successfully.');
    }
}
