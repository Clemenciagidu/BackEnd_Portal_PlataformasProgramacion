<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('ejemplo');
});*/

Route::get('/', function () {
    return view('/index');
});

/*Route::get('/', function () {
    return view('formulario4');
});*/

Route::get('/index', function () {
    return view('index');
});

Route::get('/acercade', function () {
    return view('acercade');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/stats', function () {
    return view('stats');
});

Route::get('/portafolio', function () {
    return view('portafolio');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/formulario2', function () {
    return view('formulario2');
});

Route::get('/formulario3', function () {
    return view('formulario3');
});

Route::get('/formulario4', function () {
    return view('formulario4');
});