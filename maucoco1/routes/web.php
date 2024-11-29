<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;


//nuevas rutas de tipo get/igual van a tener sobrenombres
// en los controladores ponemos los 

/* rutas para trabajar con clientecontroller*/

Route::get('/cliente/create',[clienteController::class,'create'])->name('formu');

Route::post('/cliente',[clienteController::class,'store'])->name('rutaenvia');

Route::get('/',[clienteController::class,'home'])->name('inicio');

Route::get('/cliente',[clienteController::class,'index'])->name('consulta');

Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('edit'); 

Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('actualizar');

/*Route::get('/', function () {
    return view('welcome');
});
*/

/* Route::view('/','inicio')->name('inicio');

Route::view('/formulario','formulario')->name('formu');

Route::view('/consultar','clientes')->name('consulta'); */

Route::view('/component','componentes')->name('rutacomponent');