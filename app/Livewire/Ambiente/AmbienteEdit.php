<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use App\Models\User;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $ambiente;
    public $nome, $descricao, $status;

    public function mount(Ambiente $ambiente)
    {
        $this->ambiente = $ambiente;
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao;
        $this->status = $ambiente->status;
    }

    public function update()
    {

        $this->ambiente->update([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);

        session()->flash('success', 'Ambiente atualizado!');
        return redirect()->route('ambiente.index');
    }
    
    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}
