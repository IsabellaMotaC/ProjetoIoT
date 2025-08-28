<?php

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