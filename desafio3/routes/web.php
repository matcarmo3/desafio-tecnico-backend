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
//produtos
Route::get('/produtos/listar', 'ProductController@listar')->name('products');
Route::get('/produtos/cadastrar', 'ProductController@create')->name('products.create');
Route::post('/produtos/listar', 'ProductController@store')->name('products.store');
Route::get('/produtos/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::put('/produtos/{id}/', 'ProductController@update')->name('products.update');
Route::delete('/produtos/{id}/delete', 'ProductController@destroy')->name('products.destroy');

//categorias
Route::get('/categorias/listar', 'CategoryController@listar')->name('categories');
Route::get('/categorias/cadastrar', 'CategoryController@create')->name('categories.create');
Route::get('/categorias/{id}/edit', 'CategoryController@edit')->name('categories.edit');
Route::post('/categorias/listar', 'CategoryController@store')->name('categories.store');
Route::delete('/categorias/{id}/delete', 'CategoryController@destroy')->name('categories.destroy');
