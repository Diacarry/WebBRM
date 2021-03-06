<?php
/*-----------
| Web Routes |
|------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/', 'InicioController@Inicio');
Route::get('/Admin', 'AdminController@Inicio');
Route::get('/Proveedor', 'ProveedorController@Inicio');
Route::get('/Cliente', 'ClienteController@Inicio');

Route::resource('/CrudInventario', 'InventarioController');
Route::resource('/CrudIngreso', 'IngresoController');
Route::resource('/CrudCompra', 'CompraController');