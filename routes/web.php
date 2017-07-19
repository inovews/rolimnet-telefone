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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/atendimento', 'AtendimentoController@index')->name('atendimento');
Route::get('/atendimento/criar', 'AtendimentoController@create')->name('atendimento.criar');
Route::put('/atendimento/criar', 'AtendimentoController@store')->name('atendimento.criar');
Route::get('/atendimento/{id}/editar', 'AtendimentoController@edit')->name('atendimento.editar');
Route::put('/atendimento/{id}/update', 'AtendimentoController@update')->name('atendimento.atualizar');
Route::delete('/atendimento/{id}/excluir', 'AtendimentoController@destroy')->name('atendimento.excluir');