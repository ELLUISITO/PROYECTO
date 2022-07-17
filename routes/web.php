<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;


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

Route::get('/actualizar', function () {
    return view('restaurante.Registrorestaurante.actualizar');
})->middleware('auth');

Route::get('/registro', function () {
    return view('auth2.login_register');
})->middleware('auth');
Route::get('/registroRestaurante', function () {
    return view('restaurante.Registrorestaurante.registro');
})->middleware('auth');

Auth::routes();
Route::resource('restaurantes', App\Http\Controllers\RestauranteController::class)->middleware('auth');
Route::resource('horarios', App\Http\Controllers\HorarioController::class)->middleware('auth');
Route::resource('redessociales', App\Http\Controllers\RedessocialeController::class)->middleware('auth');
Route::resource('servicios', App\Http\Controllers\ServicioController::class)->middleware('auth');
Route::resource('tiposcomidas', App\Http\Controllers\TiposcomidaController::class)->middleware('auth');
Route::resource('tiposocasiones', App\Http\Controllers\TiposocasioneController::class)->middleware('auth');
Route::resource('ubicaciones', App\Http\Controllers\UbicacioneController::class)->middleware('auth');
Route::resource('inflegals', App\Http\Controllers\InflegalController::class)->middleware('auth');
Route::resource('replegals', App\Http\Controllers\ReplegalController::class)->middleware('auth');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
