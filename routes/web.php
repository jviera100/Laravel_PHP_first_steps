<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    $frutas = ['manzana', 'platano', 'maranja', 'piña'];
    return view('home', [
        'nombre' => 'Juan',
        'edad' => 21,
        'frutas' => $frutas
    ]);
});
Route::get('/holamundo', function () {
    return view('holamundo');
});
