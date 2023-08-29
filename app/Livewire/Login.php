<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.guest')]

class Login extends Component
{

    #[Rule('required', 'email')]
    public string $email = '';
    #[Rule('required')]
    public string $password = '';

    public function login(){
        $this->validate();
        if (Auth::attempt($this->validate())){
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => 'email tidak terdaftar',
            'password' => 'password salah',
        ]);


    }
    public function render()
    {
        return view('livewire.login');
    }
}
