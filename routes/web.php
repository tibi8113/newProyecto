<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adios', function () {
    return view('adios');
});

Route::post('/post', function () {
    return view('post');
});

Route::post('/postform', function () {
    $nombre=request()->get('Nombre');
    $apellido=request()->get('Apellido');
    return ('Datos formulario:<br /><br />Nombre: '.$nombre.'<br /><br />Apellido: '.$apellido);
});
