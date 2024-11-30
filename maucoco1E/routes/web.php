<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;


//nuevas rutas de tipo get/igual van a tener sobrenombres
// en los controladores ponemos los 

Route::get('/',[clienteController::class,'home'])->name('inicio');

Route::resource('cliente',clienteController::class);
