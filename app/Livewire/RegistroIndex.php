<?php

namespace App\Livewire;

use Livewire\Component;

class RegistroIndex extends Component
{
    public $sensor_id, $valor, $unidade, $data_hora;

    

    public function render()
    {
        return view('livewire.registro-index');
    }
}
