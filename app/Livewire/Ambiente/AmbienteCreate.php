<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome, $descricao;

    public function store()
    {

        Ambiente::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao
        ]);

        session()->flash('success', 'Cadastro Realizado Com Sucesso!');
        return redirect()->route('ambiente.index');

        $this->validate();
    }
    
    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }
}
