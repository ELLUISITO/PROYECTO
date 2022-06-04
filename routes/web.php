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

Auth::routes();
Route::resource('restaurantes', App\Http\Controllers\RestauranteController::class);

Route::resource('horarios', App\Http\Controllers\HorarioController::class);
Route::resource('redessociales', App\Http\Controllers\RedessocialeController::class);
Route::resource('servicios', App\Http\Controllers\ServicioController::class);
Route::resource('tiposcomidas', App\Http\Controllers\TiposcomidaController::class);
Route::resource('tiposocasiones', App\Http\Controllers\TiposocasioneController::class);
Route::resource('ubicaciones', App\Http\Controllers\UbicacioneController::class);
Route::resource('inflegals', App\Http\Controllers\InflegalController::class);
Route::resource('replegals', App\Http\Controllers\ReplegalController::class);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
