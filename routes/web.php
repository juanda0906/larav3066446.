<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\OrmController;



Route::get('consultaOrm', [OrmController::class, 'consulta']);


Route::get('create', [CategoryController::class, 'create']);
Route::post('store', [CategoryController::class, 'store'])->name('category.store');





Route::get('curso/list',[CursoController::class,'index'])->name('curso.index');
Route::get('curso/create',[CursoController::class,'create']);
Route::post('curso/store', [CursoController::class,'store'])->name('curso.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}/edit',[CursoController::class,'edit'])->name('curso.edit');
