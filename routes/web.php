<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\OperacionesController;



Route::get('saludo', [SaludoController::class, 'saludar']);

Route::get('suma/{num1}/{num2}', [OperacionesController::class, 'sumar']);

Route::get('frmcuadratica', [OperacionesController::class, 'frmcuadratica']);
Route::post('cuadratica', [OperacionesController::class, 'cuadratica'])->name('cudratica.calcular');
