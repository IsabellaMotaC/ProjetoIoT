<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'email.required' => 'E-mail Obrigatório',
        'email.email' => 'Formato de E-mail Inválido',
        'password.required' => 'Senha Obrigatória',
        'password.min' => 'Tamanho Mínimo de Caractéres: 06'
    ];

    public function login()
    {
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {

            session()->regenerate();

            return redirect()->route('dashboard');
        }
        session()->flash('error', 'E-mail ou Senha incorretos');
    }
    
    public function render()
    {
        return view('livewire.auth.login');
    }
}
