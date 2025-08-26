<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $sensor;
    public $codigo, $descricao, $status, $tipo, $ambiente_id;

    public function mount(Sensor $sensor)
    {
        $this->sensor = $sensor;
        $this->codigo = $sensor->codigo;
        $this->tipo = $sensor->tipo;
        $this->descricao = $sensor->descricao;
        $this->status = $sensor->status;
    }

    public function update()
    {

        $this->sensor->update([
            'codigo' => $this->codigo,
            'descricao' => $this->descricao,
            'tipo' => $this->tipo,
            'status' => $this->status
        ]);

        session()->flash('success', 'Sensor atualizado!');
        return redirect()->route('sensor.index');
    }
    public function render()
    {
        return view('livewire.sensor.sensor-edit');
    }
}
