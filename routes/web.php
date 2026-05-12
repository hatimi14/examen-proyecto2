<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('examen.dashboard');
});

Route::get('/añadir', function () {
    return view('examen.añadir');
});
Route::get('/editar/{id}', function ($id) {
    return view('examen.editar', ['id' => $id]);
});
