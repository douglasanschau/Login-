<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoControlador;
use App\Http\Controllers\DepartamentoControlador;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* Outra Maneira de Proteger 
   Route::get('/produtos', [ProdutoControlador::class, 'index']) ->middleware('auth');
*/
Route::get('/produtos', [ProdutoControlador::class, 'index']);
Route::get('/departamentos', [DepartamentoControlador::class, 'index']);
