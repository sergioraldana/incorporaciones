<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified', 'role:estudiante'])
    ->get('', App\Http\Livewire\Estudiante\Index::class)
    ->name('estudiante');

Route::middleware(['auth:sanctum', 'verified', 'role:estudiante'])
    ->get('/incorporacion/create', App\Http\Livewire\Estudiante\Index::class)
    ->name('incorporacion.create');
