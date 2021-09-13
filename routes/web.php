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

/*
|--------------------------------------------------------------------------
| ESTUDIANTE
|--------------------------------------------------------------------------
*/


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/tablero', function () {
    return view('livewire.tablero');
})->name('tablero');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/tramites', function () {
    return view('tramites');
})->name('tramites');

Route::get('/solicitar/incorporacion', function () {
    return view('livewire.estudiante.tramites.formulario-solicitud-incorporacion');
});

