<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ListadoController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\ListadojController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('persona', PersonasController::class);
Route::resource('listado', ListadoController::class);
Route::resource('jugadores', JugadoresController::class);
Route::resource('listadoj', ListadojController::class);


