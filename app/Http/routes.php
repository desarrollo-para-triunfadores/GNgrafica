<?php


Route::get('/', function () {
   return view('/auth/login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'web'], function () {
   Route::resource('usuarios','UsersController');
   Route::resource('clientes','ClientesController');

   Route::resource('paises','PaisesController');
   Route::resource('provincias','ProvinciasController');
   Route::resource('localidades','LocalidadesController');
   Route::resource('rubros','RubrosController');

   Route::resource('tipoArticulos','TiposController');
   Route::resource('materiales','MaterialesController');
   Route::resource('talles','TallesController');
   Route::resource('articulos','ArticulosController');
   Route::resource('articulosVentas','ArticulosVentasController');

   Route::resource('proveedores','ProveedoresController');
   Route::resource('configuraciones','ConfigController');
   Route::resource('cajas','CajasController');
   Route::resource('movimientos','MovimientosController');
   Route::resource('ventas','VentasController');
   Route::resource('pedidos','PedidosController');

   Route::get('tablaRegistros', ['uses' => 'CajasController@registrosCajas', 'as' => 'admin.cajas.registrosCajas']);
   Route::PUT('usuario/{usuarios}', ['uses' => 'UsersController@actPass', 'as' => 'usuario.actpass']);
   Route::get('pedidos/{pedidos}', ['uses' => 'PedidosController@devolverPantalla', 'as' => 'pedidos.devolverPantalla']);
});


Route::auth();

Route::get('/home', 'HomeController@index');
