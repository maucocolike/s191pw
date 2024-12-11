<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;



Route::get('/',[UsuarioController::class,'mostrarFormulario'])->name('mostrar');
Route::post('/guardar',[UsuarioController::class,'guardarUsuario'])->name('guardar_usuario');