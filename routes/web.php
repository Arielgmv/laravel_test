<?php

use Illuminate\Routing\RouteGroup;
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

//Rutas de producto
Route::group(['prefix' => 'productos'], function () {
    Route::get('index', 'ProductosController@index');
    Route::get('detail/{id}', 'ProductosController@detail');
    Route::get('crear', 'ProductosController@create');
    Route::post('save', 'ProductosController@save');
    Route::get('delete/{id}', 'ProductosController@delete');
    Route::get('editar/{id}', 'ProductosController@edit');
    Route::post('update', 'ProductosController@update');
});
