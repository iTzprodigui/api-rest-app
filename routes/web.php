<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\BitacoraController;
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

Route::resource('alumnos', AlumnoController::class);
Route::resource('pagos', PagoController::class);
Route::resource('docentes', DocenteController::class);
Route::resource('bitacoras', BitacoraController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
