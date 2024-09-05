<?php

use App\Http\Controllers\NotasController;

Route::get('/', [NotasController::class, 'mostrarFormulario'])->name('formulario');
Route::post('/calcular', [NotasController::class, 'calcularPromedio'])->name('calcularPromedio');
