<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{

    public $ambiente_id, $descricao, $codigo, $tipo, $status, $sensor;

    protected $rules = [
        'ambiente_id' => 'required',
        'codigo' => 'required|unique:sensors,codigo',
        'tipo' => 'required',
        'descricao' => 'required'
    ];

    protected $messages = [
        'ambiente_id.required' => 'O campo é obrigatório',
        'codigo.required' => 'O campo é obrigatório',
        'codigo.unique' => 'O campo é único',
        'tipo.required' => 'O campo é obrigatório',
        'descricao.required' => 'O campo é obrigatório'
    ];
    
    public function store()
    {
        $this->validate();
        
        Sensor::create([
            'ambiente_id' => $this->ambiente_id,
            'descricao' => $this->descricao,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'status' => $this->status
        ]);

        session()->flash('success', 'Cadastro Realizado Com Sucesso!');
        return redirect()->route('sensor.index');
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor.sensor-create', compact('ambientes'));
    }
}
