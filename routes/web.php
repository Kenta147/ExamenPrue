<?php

use App\Http\Controllers\EmpleadosController;

use App\Http\Controllers\EmpresasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');});
   


    Route::get('/empleados', [EmpleadosController::class, 'index'])->name('empleados.index');
    Route::get('/empleados/create', [EmpleadosController::class, 'create'])->name('empleados.create');
    Route::post('/empleados', [EmpleadosController::class, 'store'])->name('empleados.store');
    Route::get('/empleados/{id}/edit', [EmpleadosController::class, 'edit'])->name('empleados.edit');
    Route::put('/empleados/{id}', [EmpleadosController::class, 'update'])->name('empleados.update');
    Route::delete('/empleados/{id}', [EmpleadosController::class, 'destroy'])->name('empleados.destroy');
    
    
    
    
    
    Route::resource('empresas', EmpresasController::class);
    Route::get('/empresas', [EmpresasController::class, 'index'])->name('empresas.index');
    Route::get('/empresas/create', [EmpresasController::class, 'create'])->name('empresas.create');
    Route::post('/empresas', [EmpresasController::class, 'store'])->name('empresas.store');
    Route::get('/empresas/{id}/edit', [EmpresasController::class, 'edit'])->name('empresas.edit');
    Route::put('/empresas/{id}', [EmpresasController::class, 'update'])->name('empresas.update');
    Route::delete('/empresas/{id}', [EmpresasController::class, 'destroy'])->name('empresas.destroy');
