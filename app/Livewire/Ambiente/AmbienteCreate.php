<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome, $descricao, $status;

     protected $rules = [
        'nome' => 'required',
        'descricao' => 'required|max.:255'
    ];

    protected $messages = [
        'nome.required' => 'Campo Nome Obrigatório.', 
        'descricao.required' => 'Campo Descrição Obrigatório.'
        
    ];

    public function store()
    {

        // $this->validate();
        
        Ambiente::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);

        session()->flash('success', 'Cadastro Realizado Com Sucesso!');
        return redirect()->route('ambiente.index');
    }
    
    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }
}
