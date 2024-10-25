<?php

use App\Http\Controllers\Repaso1Controller;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',[Repaso1Controller::class,'portada'])->name('portada');
Route::get('/repaso1',[Repaso1Controller::class,'repaso1'])->name('repaso1');

Route::post('/convertir',[Repaso1Controller::class,'convertir'])->name('convertir');

/* */