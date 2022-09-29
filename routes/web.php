<?php

use App\Http\Controllers\EstudiantesController;
use Illuminate\Support\Facades\Route;

Route::get('/',[EstudiantesController::class, 'index'])->name('estudiantes.index');
Route::get('/create',[EstudiantesController::class, 'create'])->name('estudiantes.create');
Route::post('/store',[EstudiantesController::class, 'store'])->name('estudiantes.store');
Route::get('/edit/{id}',[EstudiantesController::class, 'edit'])->name('estudiantes.edit');
Route::put('/update/{id}',[EstudiantesController::class, 'update'])->name('estudiantes.update');
Route::get('/show/{id}',[EstudiantesController::class, 'show'])->name('estudiantes.show');
Route::delete('/destroy/{id}',[EstudiantesController::class, 'destroy'])->name('estudiantes.destroy');