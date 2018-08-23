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

##retorna as disciplinas direto no navegador
Route::get('/', 'DisciplinaController@index'); 



##Crias as rotas para todos os métodos do Disciplina Controller (show, create, store ....)
Route::resource('disciplinas', 'DisciplinaController');