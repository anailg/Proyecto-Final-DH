<?php

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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('admin/home', 'Admin\HomeController@index');

Route::get('faq', function () {
    return view('faq');
});

Route::get('cantUsuarios', 'UsersController@cantUsuarios');


Auth::routes();

Route::post('direcciones/', 'DireccionesController@index');
Route::post('direcciones/index', 'DireccionesController@index');
Route::get('direcciones/create/', 'DireccionesController@create');
Route::post('direcciones/create/', 'DireccionesController@store');
Route::get('direcciones/edit/{id}', 'DireccionesController@edit');
Route::post('direcciones/edit/{id}', 'DireccionesController@update');
Route::get('direcciones/destroy/{id}', 'DireccionesController@destroy');
Route::post('/direcciones/setDefault/{id}', 'DireccionesController@setDefault');

Route::post('pedidos/', 'PedidosController@index');

Route::get('productos/', 'ProductosController@lista');
Route::get('productos/{id}', 'ProductosController@show');


Route::get('/admin/productos/index', 'Admin\ProductosController@index');
Route::get('/admin/productos/menu', 'Admin\ProductosController@menu');
Route::get('/admin/productos/create', 'Admin\ProductosController@create');
Route::post('/admin/productos/create', 'Admin\ProductosController@store');
Route::get('/admin/productos/edit/{id}', 'Admin\ProductosController@edit');
Route::post('/admin/productos/edit/{id}', 'Admin\ProductosController@update');
Route::get('/admin/productos/categorias/{id}', 'Admin\ProductosController@attachCategorias');
Route::post('/admin/productos/categorias/{id}', 'Admin\ProductosController@saveCategorias');
Route::get('/admin/productos/destroy/{id}', 'Admin\ProductosController@destroy');
Route::get('/admin/productos/{id}', 'Admin\ProductosController@show');


Route::get('/categorias/', 'categoriasController@lista');
Route::get('/categorias/{id}', 'categoriasController@show');


Route::get('admin/categorias/index', 'Admin\CategoriasController@index');
Route::get('/admin/categorias/menu', 'Admin\CategoriasController@menu');
Route::get('/admin/categorias/create', 'Admin\CategoriasController@create');
Route::post('/admin/categorias/create', 'Admin\CategoriasController@store');
Route::get('/admin/categorias/edit/{id}', 'Admin\CategoriasController@edit');
Route::post('/admin/categorias/edit/{id}', 'Admin\CategoriasController@update');
Route::get('/admin/categorias/destroy/{id}', 'Admin\CategoriasController@destroy');
Route::get('/admin/categorias/{id}', 'Admin\CategoriasController@show');



