<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*--RUTA PARA CREAR CLIENTES*/
Route::prefix('clientes')->group(function () {
    Route::get('/', 'ClientController@index')->name('clientes');

    Route::get('crear', 'ClientController@crear')->name('clientes.crear');
    Route::post('crear', 'ClientController@guardar')->name('clientes.guardar');

    Route::get('editar/{cliente}', 'ClientController@editar')->name('clientes.editar');
    Route::put('editar/{cliente}', 'ClientController@actualizar')->name('clientes.actualizar');

    Route::put('borrar/{cliente}', 'ClientController@borrar')->name('clientes.borrar');

});



