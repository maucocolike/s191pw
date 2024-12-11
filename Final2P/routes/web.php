<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlador;

/*Route::get('/', function () {
    return view('principal');
});*/

Route::get('/', [controlador::class, 'agRincipal'])->name('principal');
Route::get('/registrar', [controlador::class, 'Regis'])->name('registrar');
Route::post('/guardar',[controlador::class,'store'])->name('rutaenvia');