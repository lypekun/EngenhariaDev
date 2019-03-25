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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//ROTAS DE ADMIN
Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
{	
	Route::resource('/admin','Admin\AdminController');
	Route::get('/home', 'HomeController@index');
	Route::resource('usuarios', 'UsuarioController');

});

//ROTAS DE CLIENTE
Route::group(['middleware' => 'App\Http\Middleware\Cliente'], function()
{	
	Route::resource('/cliente','Cliente\ClienteController');
});

//ROTAS DE SUPERVISOR
Route::group(['middleware' => 'App\Http\Middleware\Supervisor'], function()
{	
	Route::resource('/supervisor','Supervisor\SupervisorController');
});

