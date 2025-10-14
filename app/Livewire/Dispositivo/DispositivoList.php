<?php

namespace App\Livewire\Dispositivo;

use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class DispositivoList extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 15;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function toggleStatus($sensorId)
    {
        $sensor = Sensor::find($sensorId);

        if ($sensor) {
            // Alterna o status: se for 1 (ligado), muda para 0 (desligado), e vice-versa.
            // O componente trabalha com inteiros para o banco de dados.
            $sensor->status = ($sensor->status == 1) ? 0 : 1;
            $sensor->save();
        }
    }

    public function delete($sensorId)
    {
        Sensor::find($sensorId)->delete();
        session()->flash('message', 'Sensor excluído com sucesso.');
    }

    public function render()
    {
        $query = Sensor::query();

        if ($this->search) {
            $query->where('codigo', 'like', "%{$this->search}%")
                  ->orWhere('tipo', 'like', "%{$this->search}%")
                  ->orWhere('status', 'like', "%{$this->search}%");
        }

        return view('livewire.dispositivo.dispositivo-list', [
            'sensors' => $query->paginate($this->perPage),
        ]);
    }
}
