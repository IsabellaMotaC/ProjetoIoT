<?php

use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\RegistroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('registro/create', [RegistroController::class, "store"]);

Route::get('sensor/show', [DispositivoController::class, "show"]);

Route::get('sensor/update', [DispositivoController::class, "update"]);


