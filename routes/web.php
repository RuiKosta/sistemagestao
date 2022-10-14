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
| verbs: get, post, put, patch, delet and options
| Route::get($uri, $callback)
*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre', 'SobreController@sobre');

Route::get('/contato', 'ContatoController@contato');