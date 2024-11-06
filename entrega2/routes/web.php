<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\micontrolador;

Route::get('/', [micontrolador::class, 'mostrarInicio'])->name('mostrarinicio');

Route::get('/confirmacion/telefono', [micontrolador::class, 'confirmarTelefono'])->name('confirmacion.telefono');

Route::get('/confirmacion-correo', function () {
    return view('confirmacion-correo');
})->name('confirmacion-correo');

Route::get('/lista-habitaciones', function () {
    return view('lista-habitaciones');
})->name('lista-habitaciones');

Route::get('/detalle-habitacion', function () {
    return view('detalle-habitacion');
})->name('detalle-habitacion');