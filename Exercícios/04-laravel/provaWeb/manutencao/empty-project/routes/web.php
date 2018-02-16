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

Route::get('/menu',function(){
  return view('layout.menu');
});

Route::resource('/registros','RegistroController');
Route::resource('/equipamentos','EquipamentoController');
Route::get('/areaAdmin',function(){
  return view('layout.areaAdmin');
});

Route::get('/listar','RegistroController');

Route::get('/listarEq','EquipamentoController';

Route::get('/serchEq',function(){
  return view('equipamentos.search');
});
Route::get('/resultEq','EquipamentoController');
