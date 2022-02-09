<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdopcionController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\IndexAdminController;
use App\Http\Controllers\ControllerAdministrador;


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

Route::resource('/administrador', ControllerAdministrador::class);
Route::resource('/usuarios', UsuarioController::class);
Route::resource('/empleados', EmpleadoController::class);
Route::resource('/clientes', ClienteController::class);
Route::resource('/mascotas', MascotaController::class);
Route::resource('/productos', ProductoController::class);
Route::resource('/inicioAdmin', IndexAdminController::class);

Route::get('/adoptar', '\App\Http\Controllers\AdopcionController@index')->name('index');


Route::get('/shop', '\App\Http\Controllers\CartController@shop')->name('shop');
Route::get('/cart', '\App\Http\Controllers\CartController@cart')->name('cart.index');
Route::post('/add', '\App\Http\Controllers\CartController@add')->name('cart.store');
Route::post('/update', '\App\Http\Controllers\CartController@update')->name('cart.update');
Route::post('/remove', '\App\Http\Controllers\CartController@remove')->name('cart.remove');
Route::post('/clear', '\App\Http\Controllers\CartController@clear')->name('cart.clear');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
