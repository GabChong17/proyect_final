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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contador', [App\Http\Controllers\HomeController::class, 'index'])->name('contador');
Route::get('/encargado', [App\Http\Controllers\HomeController::class, 'index'])->name('encargado');

Route::get('prueba', function(){
    return "has accedido correctamente";
})->middleware(['auth:sanctum', 'ingreso']);

Route::get('no_autorizado', function(){
    return "nel perro xd";
});

/* Route::middleware(['auth:sanctum', 'verified'])->get('/cliente', function(){
	return view('cliente');
})->name('cliente'); */
/*
Route::get('/contador', [App\Http\Controllers\HomeController::class, 'contador'])->name('contador');
Route::get('/encargado', [App\Http\Controllers\HomeController::class, 'encargado'])->name('encargado');

*/
Route::resource('cliente','App\Http\Controllers\ClienteController');


