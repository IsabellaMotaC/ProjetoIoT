<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{

    public $ambiente_id, $descricao, $codigo, $tipo, $status, $sensor;

    public function store()
    {
        // $this->validate();
        
        Sensor::create([
            'ambiente_id' => $this->ambiente->id,
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
        return view('livewire.sensor.sensor-create');
    }
}
