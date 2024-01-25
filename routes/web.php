<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ReporteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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


Route::get('/', [\App\Http\Controllers\ReporteController::class, 'reportesDeUsuarios'])->name('homeUser');
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('auth-google');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

Route::post('/home/reporte', [\App\Http\Controllers\ReporteController::class, 'enviarReporte'])->name('reportar');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\ReporteController::class, 'misReportes'])->name('home');
Route::get('/home/editar/{id}', [\App\Http\Controllers\ReporteController::class, 'editarReporte'])->name('editar');
Route::post('/home/actualizar/{id}', [\App\Http\Controllers\ReporteController::class, 'actualizarReporte'])->name('actualizar');
Route::delete('/home/eliminar/{id}', [\App\Http\Controllers\ReporteController::class, 'eliminarReporte'])->name('eliminar');


