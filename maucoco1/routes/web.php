<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

//nuevas rutas de tipo get/igual van a tener sobrenombres
// en los controladores ponemos los 

Route::get('/',[controladorVistas::class,'home'])->name('inicio');

Route::get('/formulario',[controladorVistas::class,'insert'])->name('formu');

Route::get('/consultar',[controladorVistas::class,'select'])->name('consulta');

Route::post('/enviarCliente',[controladorVistas::class,'procesaCliente'])->name('rutaenvia');



/*Route::get('/', function () {
    return view('welcome');
});
*/

/* Route::view('/','inicio')->name('inicio');

Route::view('/formulario','formulario')->name('formu');

Route::view('/consultar','clientes')->name('consulta'); */

Route::view('/component','componentes')->name('rutacomponent');