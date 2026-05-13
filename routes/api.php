<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectsController;

Route::get('/proyectos', [ProjectsController::class, 'index']);
Route::post('/añadirProyecto', [ProjectsController::class, 'store']);
Route::get('/mostrarUltimo', [ProjectsController::class, 'mostrarUltimo']);
Route::get('/proyectos/{id}', [ProjectsController::class, 'show']);
Route::patch('/editarProyecto/{id}', [ProjectsController::class, 'update']);

/*use App\Http\Controllers\Api\TelefonosController;

Route::get('/telefonos', [TelefonosController::class, 'index']);
Route::post('/añadirTelefono', [TelefonosController::class, 'store']);
Route::get('/telefonos/{id}', [TelefonosController::class, 'show']);
Route::patch('/editar/{id}', [TelefonosController::class, 'update']);*/