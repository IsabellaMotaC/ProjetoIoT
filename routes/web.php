<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use Illuminate\Support\Facades\Route;

Route::prefix('ambiente')->group(function () {
    Route::get('/index', AmbienteList::class)->name('ambiente.index');
    Route::get('/create', AmbienteCreate::class)->name('ambiente.create');
    Route::get('/edit', AmbienteEdit::class)->name('ambiente.edit');

});
