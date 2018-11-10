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

//Route::get('/', function () {
//    return view('login');
//});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('livros','LivrosController');
//Route::post('/livros/save','LivrosController@createBook');
//Route::post('/livros/edit/{id}','LivrosController@update');

Route::resource('editoras','EditorasController');
//Route::post('/editoras/save','EditorasController@createEditora');
//Route::post('/editoras/edit/{id}','EditorasController@update');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
