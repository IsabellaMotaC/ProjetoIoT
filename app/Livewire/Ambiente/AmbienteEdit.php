<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use App\Models\User;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $ambiente;
    public $nome, $descricao, $status, $id;

    //  protected $rules = [
    //     'nome' => 'required',
    //     'status' => 'required',
    //     'descricao' => 'required'
    // ];

    // protected $messages = [
    //     'nome.required' => 'O Campo Nome é Obrigatório.',
    //     'status.required' => 'O Campo Status é Obrigatório.',
    //     'descricao.required' => 'O Campo Descrição é Obrigatório.'
    // ];

     public function mount($id)
    {
        $ambiente = Ambiente::find($id);

        if ($ambiente == null) {
            return redirect()->route('ambiente.index');
        }

        $this->id = $ambiente->id;
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao;
        $this->status = $ambiente->status;
    }


    public function salvar()
    {
        $ambiente = Ambiente::find($this->id);

        $ambiente->update([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);

         $ambiente->save();

        session()->flash('success', 'Ambiente atualizado!');
        return redirect()->route('ambiente.index');
    }
    
    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}
