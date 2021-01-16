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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/contador', [App\Http\Controllers\HomeController::class, 'contador'])->name('contador');
Route::get('/encargado', [App\Http\Controllers\HomeController::class, 'encargado'])->name('encargado');
Route::get('/cliente', [App\Http\Controllers\HomeController::class, 'cliente'])->name('cliente');


