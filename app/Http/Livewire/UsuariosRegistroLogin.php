<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UsuariosRegistroLogin extends Component
{
    public $users, $email, $password, $name;

    public $registerForm = false;

    public function render()
    {
        return view('usuarios-registro-login.registro-login');
    }

    private function resetInputFields()
    {
        $this->name     = '';
        $this->email    = '';
        $this->password = '';
    }

    public function login()
    {
        $validatedDate = $this->validate(
            [
                'email'    => 'required|email',
                'password' => 'required',
            ]
        );

        if (Auth::attempt(array('email' => $this->email, 'password' => $this->password))) {
            session()->flash('message', "You are Login successful.");
        } else {
            session()->flash('error', 'email and password are wrong.');
        }
    }

    public function register()
    {
        $this->registerForm = !$this->registerForm;
    }

    public function registerStore()
    {
        $validatedDate = $this->validate(
            [
                'name'     => 'required',
                'email'    => 'required|email',
                'password' => 'required',
            ]
        );

        $this->password = Hash::make($this->password);

        User::create(['name' => $this->name, 'email' => $this->email, 'password' => $this->password]);

        session()->flash('message', 'Your register successfully Go to the login page.');

        $this->resetInputFields();
    }
}
