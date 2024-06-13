<?php

use Illuminate\Support\Facades\Route;

// Ruta para la página de inicio
Route::get('/', function () {
    return view('home');
})->name('home');

// Ruta para servicios con parámetro opcional
Route::get('/servicios/{param?}', function ($param = null) {
    return view('servicios', ['param' => $param]);
})->where('param', '[a-zA-Z]+')->name('servicios');

// Ruta para proyectos con parámetro opcional
Route::get('/proyectos/{param?}', function ($param = null) {
    return view('proyectos', ['param' => $param]);
})->where('param', '[a-zA-Z]+')->name('proyectos');

// Ruta para clientes con parámetro opcional
Route::get('/clientes/{param?}', function ($param = null) {
    return view('clientes', ['param' => $param]);
})->where('param', '[a-zA-Z]+')->name('clientes');

// Ruta para blog con parámetro opcional
Route::get('/blog/{param?}', function ($param = null) {
    return view('blog', ['param' => $param]);
})->where('param', '[0-9]+')->name('blog');

// Ruta para contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
