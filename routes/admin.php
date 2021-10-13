<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'verified', 'role:super-admin'])->group(function () {

    Route::get('/', App\Http\Livewire\Admin\Index::class)->name('index');;

    Route::get('/usuarios', App\Http\Livewire\Admin\Usuarios::class)->name('usuarios');
});
