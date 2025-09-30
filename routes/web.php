<?php


use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use Illuminate\Support\Facades\Route;

Route::prefix('ambiente')->group(function () {
    Route::get('/index', AmbienteList::class)->name('ambiente.index');
    Route::get('/create', AmbienteCreate::class)->name('ambiente.create');
    Route::get('/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');

});

use App\Livewire\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorList;
use Illuminate\Support\Facades\Route;

Route::prefix('sensor')->group(function () {
    Route::get('/index', SensorList::class)->name('sensor.index');
    Route::get('/create', SensorCreate::class)->name('sensor.create');
    Route::get('/edit/{id}', SensorEdit::class)->name('sensor.edit');
});
=======
Route::get('/', Dashboard::class);


