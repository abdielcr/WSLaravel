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

//Retornando un valor dentro de una url pero sin vitas definida.
Route::get('/wslaravel', function(){
    return 'WS-LARAVEL';
});

//Retornando directamente un Json a la vista.
Route::get('/wsjson',function(){
    return [
        'Nombre'  => 'Abdiel Carrasco',
        'Puesto'  => 'Software Developer',
        'Empresa' => 'C4',
    ];
});

//Ruta con vista creada
Route::get('/wsvistalaravel',function(){
    return view('wsvistalaravel');//Nombre del Archivo
});