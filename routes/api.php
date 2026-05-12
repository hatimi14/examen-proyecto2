<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TelefonosController;

Route::get('/telefonos', [TelefonosController::class, 'index']);
Route::post('/añadirTelefono', [TelefonosController::class, 'store']);
Route::get('/telefonos/{id}', [TelefonosController::class, 'show']);
Route::patch('/editar/{id}', [TelefonosController::class, 'update']);