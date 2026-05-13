<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('examen.dashboard');
    });

    Route::get('/añadir', function () {
        return view('examen.añadir');
    });
    Route::get('/editar/{id}', function ($id) {
        return view('examen.editar', ['id' => $id]);
    });
});*/

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('examenProyecto.index');
    });
    Route::get('/añadirProyecto', function () {
        return view('examenProyecto.añadirProyecto');
    });
    Route::get('/editarProyecto/{id}', function ($id) {
        return view('examenProyecto.editarProyecto' , ['id' => $id]);
    });

});