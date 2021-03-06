<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\BitacoraController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('alumnos', AlumnoController::class);
Route::apiResource('pagos', PagoController::class);
Route::apiResource('docentes', DocenteController::class);
Route::apiResource('bitacoras', BitacoraController::class);
