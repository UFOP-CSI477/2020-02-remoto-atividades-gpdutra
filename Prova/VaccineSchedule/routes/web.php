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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/vaccine','App\Http\Controllers\VacinaController');

Route::resource('/people','App\Http\Controllers\PessoasController');

Route::resource('/unity','App\Http\Controllers\UnidadeController');

Route::resource('/records','App\Http\Controllers\RegistroController');

Route::get('/geral',function () {
    return view('geral.index');
})->name('geral');

Auth::routes();
