<?php

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
Route::get('/', 'App\Http\Controllers\Site\HomeController@index')->name('site.home');

Route::get('/login', 'App\Http\Controllers\Site\LoginController@index')->name('site.login');
Route::get('/login/sair', 'App\Http\Controllers\Site\LoginController@sair')->name('site.login.sair');
Route::post('/login/entrar', 'App\Http\Controllers\Site\LoginController@entrar')->name('site.login.entrar');

Route::get('/admin/denuncias', 'App\Http\Controllers\Admin\DenunciaController@index')->name('admin.denuncias')->middleware('auth');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/denuncias/adicionar', 'App\Http\Controllers\Admin\DenunciaController@adicionar')->name('admin.denuncias.adicionar');
    Route::post('/admin/denuncias/salvar','App\Http\Controllers\Admin\DenunciaController@salvar')->name('admin.denuncias.salvar');
    Route::get('/admin/denuncias/editar/{id}','App\Http\Controllers\Admin\DenunciaController@editar')->name('admin.denuncias.editar');
    Route::put('/admin/denuncias/atualizar/{id}','App\Http\Controllers\Admin\DenunciaController@atualizar')->name('admin.denuncias.atualizar');
    Route::get('/admin/denuncias/deletar/{id}','App\Http\Controllers\Admin\DenunciaController@deletar')->name('admin.denuncias.deletar');
});

Route::get('/cadastro','App\Http\Controllers\Site\CadastroController@index')->name('site.cadastro');
Route::post('/cadastro/salvar','App\Http\Controllers\Site\CadastroController@salvar')->name('site.cadastro.salvar');


Route::get('/sobre-nos','App\Http\Controllers\Site\PaginaController@sobre_nos')->name('site.sobre_nos');
Route::get('/orientacoes','App\Http\Controllers\Site\PaginaController@orientacoes')->name('site.orientacoes');

Route::get('/produtos/pesquisa', 'App\Http\Controllers\Admin\DenunciaController@busca')->name('site.busca');
// Route::get('/busca', 'PaginasController@busca')->name('busca');

