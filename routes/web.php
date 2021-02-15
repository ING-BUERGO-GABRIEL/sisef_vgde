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

//Route::get('/', function () { return view('publica/inicio');});
Route::get('/', 'PublicaController@index');
Route::get('publica/home', 'PublicaController@index');
Route::get('publica/estadis', 'PublicaController@estadistica');
Route::get('publica/tipos', 'PublicaController@tipos');

Route::get('estadistica', 'EstadisController@index');
Route::get('estadistica/lineas', 'EstadisController@lineas');
Route::get('estadistica/torta', 'EstadisController@torta');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('tipodurazno', 'TipoDuraznoController@index');
    Route::get('tipodurazno/create', 'TipoDuraznoController@create');
    Route::post('tipodurazno', 'TipoDuraznoController@store');
    Route::get('tipodurazno/{id}/edit', 'TipoDuraznoController@edit');
    Route::post('tipodurazno/actualizar/{id}', 'TipoDuraznoController@update');
    Route::post('tipodurazno/delete/{id}', 'TipoDuraznoController@destroy');


    Route::get('encuestador', 'EncuestadorController@index');
    Route::get('encuestador/create', 'EncuestadorController@create');
    Route::post('encuestador', 'EncuestadorController@store');
    Route::get('encuestador/{id}/edit', 'EncuestadorController@edit');
    Route::post('encuestador/actualizar/{id}', 'EncuestadorController@update');
    Route::post('encuestador/delete/{id}', 'EncuestadorController@destroy');


    Route::get('plaga', 'PlagaController@index');
    Route::get('plaga/create', 'PlagaController@create');
    Route::post('plaga', 'PlagaController@store');
    Route::get('plaga/{id}/edit', 'PlagaController@edit');
    Route::post('plaga/actualizar/{id}', 'PlagaController@update');
    Route::post('plaga/delete/{id}', 'PlagaController@destroy');


    Route::get('productor', 'ProductorController@index');
    Route::get('productor/create', 'ProductorController@create');
    Route::post('productor', 'ProductorController@store');
    Route::get('productor/{id}/edit', 'ProductorController@edit');
    Route::post('productor/actualizar/{id}', 'ProductorController@update');
    Route::post('productor/delete/{id}', 'ProductorController@destroy');


    Route::get('proveedor', 'ProveedorController@index');
    Route::get('proveedor/create', 'ProveedorController@create');
    Route::post('proveedor', 'ProveedorController@store');
    Route::get('proveedor/{id}/edit', 'ProveedorController@edit');
    Route::post('proveedor/actualizar/{id}', 'ProveedorController@update');
    Route::post('proveedor/delete/{id}', 'ProveedorController@destroy');

    Route::get('fenomenoclima', 'FenomenoClimaController@index');
    Route::get('fenomenoclima/create', 'FenomenoClimaController@create');
    Route::post('fenomenoclima', 'FenomenoClimaController@store');
    Route::get('fenomenoclima/{id}/edit', 'FenomenoClimaController@edit');
    Route::post('fenomenoclima/actualizar/{id}', 'FenomenoClimaController@update');
    Route::post('fenomenoclima/delete/{id}', 'FenomenoClimaController@destroy');

    Route::get('destinoproduccion', 'DestinoProduccionController@index');
    Route::get('destinoproduccion/create', 'DestinoProduccionController@create');
    Route::post('destinoproduccion', 'DestinoProduccionController@store');
    Route::get('destinoproduccion/{id}/edit', 'DestinoProduccionController@edit');
    Route::post('destinoproduccion/actualizar/{id}', 'DestinoProduccionController@update');
    Route::post('destinoproduccion/delete/{id}', 'DestinoProduccionController@destroy');

    Route::get('sistemaprevencion', 'SisPrevencionClimaController@index');
    Route::get('sistemaprevencion/create', 'SisPrevencionClimaController@create');
    Route::post('sistemaprevencion', 'SisPrevencionClimaController@store');
    Route::get('sistemaprevencion/{id}/edit', 'SisPrevencionClimaController@edit');
    Route::post('sistemaprevencion/actualizar/{id}', 'SisPrevencionClimaController@update');
    Route::post('sistemaprevencion/delete/{id}', 'SisPrevencionClimaController@destroy');

    Route::get('lugarplantacion', 'LugarPlantacionController@index');
    Route::get('lugarplantacion/create', 'LugarPlantacionController@create');
    Route::post('lugarplantacion', 'LugarPlantacionController@store');
    Route::get('lugarplantacion/{id}/edit', 'LugarPlantacionController@edit');
    Route::post('lugarplantacion/actualizar/{id}', 'LugarPlantacionController@update');
    Route::post('lugarplantacion/delete/{id}', 'LugarPlantacionController@destroy');

    Route::get('produccion', 'ProduccionController@index');
    Route::get('produccion/create', 'ProduccionController@create');
    Route::post('produccion', 'ProduccionController@store');
    Route::get('produccion/{id}/edit', 'ProduccionController@edit');
    Route::post('produccion/actualizar/{id}', 'ProduccionController@update');
    Route::post('produccion/delete/{id}', 'ProduccionController@destroy');

    Route::get('produccioncambiosclimaticos', 'ProduccionCambiosClimaticosController@index');
    Route::get('produccioncambiosclimaticos/create', 'ProduccionCambiosClimaticosController@create');
    Route::post('produccioncambiosclimaticos', 'ProduccionCambiosClimaticosController@store');
    Route::get('produccioncambiosclimaticos/{id}/edit', 'ProduccionCambiosClimaticosController@edit');
    Route::post('produccioncambiosclimaticos/actualizar/{id}', 'ProduccionCambiosClimaticosController@update');
    Route::post('produccioncambiosclimaticos/delete/{id}/{idpro}', 'ProduccionCambiosClimaticosController@destroy');

    Route::get('produccioncambioclima', 'ProduccionCambiosClimaticosController@index');
    Route::get('produccioncambioclima/create', 'ProduccionCambiosClimaticosController@create');
    Route::post('produccioncambioclima', 'ProduccionCambiosClimaticosController@store');
    Route::get('produccioncambioclima/{id}/edit', 'ProduccionCambiosClimaticosController@edit');
    Route::post('produccioncambioclima/actualizar/{id}', 'ProduccionCambiosClimaticosController@update');
    Route::post('produccioncambioclima/delete/{id}', 'ProduccionCambiosClimaticosController@destroy');

    Route::get('publica', 'PublicaController@index');
    Route::get('publica/estadistica', 'PublicaController@estadistica');
    Route::post('publica/tipos', 'PublicaController@tipos');

    Route::get('plagaproduccions/{id}', 'PlagaProduccionsController@index');
    Route::get('plagaproduccions/create', 'PlagaProduccionsController@create');
    Route::post('plagaproduccions', 'PlagaProduccionsController@store');
    Route::get('plagaproduccions/{id}/edit', 'PlagaProduccionsController@edit');
    Route::post('plagaproduccions/actualizar/{id}', 'PlagaProduccionsController@update');
    Route::post('plagaproduccions/delete/{id}/{idpro}', 'PlagaProduccionsController@destroy');

    Route::get('plantacion', 'PlantacionController@index');
    Route::get('plantacion/create', 'PlantacionController@create');
    Route::post('plantacion', 'PlantacionController@store');
    Route::get('plantacion/{id}/edit', 'PlantacionController@edit');
    Route::post('plantacion/actualizar/{id}', 'PlantacionController@update');
    Route::post('plantacion/delete/{id}', 'PlantacionController@destroy');

    Route::get('producdestinoproduc/{id}', 'ProducDestinoproducController@index');
    Route::get('producdestinoproduc/create', 'ProducDestinoproducController@create');
    Route::post('producdestinoproduc', 'ProducDestinoproducController@store');
    Route::get('producdestinoproduc/{id}/edit', 'ProducDestinoproducController@edit');
    Route::post('producdestinoproduc/actualizar/{id}', 'ProducDestinoproducController@update');
    Route::post('producdestinoproduc/delete/{id}/{idpro}', 'ProducDestinoproducController@destroy');

    Route::get('permiso', 'PermisoController@index');
    Route::get('permiso/create', 'PermisoController@create');
    Route::post('permiso', 'PermisoController@store');
    Route::get('permiso/{id}/edit', 'PermisoController@edit');
    Route::post('permiso/actualizar/{id}', 'PermisoController@update');
    Route::post('permiso/delete/{id}', 'PermisoController@destroy');

    Route::get('roles', 'PermisoController@index');
    Route::get('rol/create', 'PermisoController@create');
    Route::post('rol', 'PermisoController@store');
    Route::get('rol/{id}/edit', 'PermisoController@edit');
    Route::post('rol/actualizar/{id}', 'PermisoController@update');
    Route::post('rol/delete/{id}', 'PermisoController@destroy');


    Route::get('usuario', 'UsuarioController@index');
    Route::get('usuario/create', 'UsuarioController@create');
    Route::post('usuario', 'UsuarioController@store');
    Route::get('usuario/{id}/edit', 'UsuarioController@edit');
    Route::post('usuario/actualizar/{id}', 'UsuarioController@update');
    Route::post('usuario/delete/{id}', 'UsuarioController@destroy');

    Route::get('contrasena', 'CambiarController@index');
    Route::post('contrasena', 'CambiarController@cambiar');
});