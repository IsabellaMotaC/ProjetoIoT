<?php

use App\Livewire\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorList;
use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Livewire\Auth\Login;
use App\Livewire\Dispositivo\DispositivoList;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');

Route::prefix('ambiente')->group(function () {
    Route::get('/index', AmbienteList::class)->middleware('auth')->name('ambiente.index');
    Route::get('/create', AmbienteCreate::class)->middleware('auth')->name('ambiente.create');
    Route::get('/edit/{id}', AmbienteEdit::class)->middleware('auth')->name('ambiente.edit');

});

Route::prefix('sensor')->group(function () {
    Route::get('/index', SensorList::class)->middleware('auth')->name('sensor.index');
    Route::get('/create', SensorCreate::class)->middleware('auth')->name('sensor.create');
    Route::get('/edit/{id}', SensorEdit::class)->middleware('auth')->name('sensor.edit');
    
    Route::get('/listStatus', DispositivoList::class)->middleware('auth')->name('sensor.list');
});

Route::get('/', Dashboard::class)->name('dashboard');


