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

Route::get('faq', function () {
    return view('faq');
});

Route::get('cantUsuarios', 'UsersController@cantUsuarios');


Auth::routes();

// Route::get('productos/', 'ProductosController@index');
// Route::get('productos/{id}', 'ProductosController@show');


Route::get('/admin/productos/index', 'Admin\ProductosController@index');
Route::get('/admin/productos/menu', 'Admin\ProductosController@menu');
Route::get('/admin/productos/create', 'Admin\ProductosController@create');
Route::post('/admin/productos/create', 'Admin\ProductosController@store');
Route::get('/admin/productos/edit/{id}', 'Admin\ProductosController@edit');
Route::post('/admin/productos/edit/{id}', 'Admin\ProductosController@update');
Route::get('/admin/productos/destroy/{id}', 'Admin\ProductosController@destroy');
Route::get('/admin/productos/{id}', 'Admin\ProductosController@show');
Route::get('/productos/{id}', 'Admin\ProductosController@show');



