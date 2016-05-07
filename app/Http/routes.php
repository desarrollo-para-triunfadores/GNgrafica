<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('/auth/login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
   Route::resource('usuarios','UsersController');
   Route::resource('paises','PaisesController');
   Route::resource('provincias','ProvinciasController');
   Route::resource('localidades','LocalidadesController');
   Route::resource('rubros','RubrosController');

   Route::resource('tipoArticulos','TiposController');
   Route::resource('materiales','MaterialesController');
   Route::resource('talles','TallesController');
   Route::resource('articulos','ArticulosController');

   Route::resource('proveedores','ProveedoresController');
   Route::resource('configuraciones','ConfigController');
   Route::resource('cajas','CajasController');
   Route::resource('movimientos','MovimientosController');
   Route::get('tablaRegistros', ['uses' => 'CajasController@registrosCajas', 'as' => 'admin.cajas.registrosCajas']);
   Route::PUT('usuario/{usuarios}', ['uses' => 'UsersController@actPass', 'as' => 'usuario.actpass']);
});

Route::auth();

Route::get('/home', 'HomeController@index');

