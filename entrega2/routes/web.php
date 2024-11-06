<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\micontrolador;

Route::get('/', function () {
    return view('confirmacion-identidad');
});

Route::get('/confirmacion/telefono', [micontrolador::class, 'confirmarTelefono'])->name('confirmacion.telefono');


