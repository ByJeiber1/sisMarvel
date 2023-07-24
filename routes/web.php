<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlataformaController;
use App\Http\Controllers\OcupacionController;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\PoderController;
use App\Http\Controllers\persPoderController;
use App\Http\Controllers\tipoObjetoController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\CompanniaController;
use App\Http\Controllers\medPeliculaController;
use App\Http\Controllers\medSerieController;
use App\Http\Controllers\ObjetoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReporteController;

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
    return view('welcome');
});


Route::resource('crud/plataforma',PlataformaController::class);
Route::resource('crud/ocupacion',OcupacionController::class);
Route::resource('crud/personaje',PersonajeController::class);
Route::resource('crud/poder',PoderController::class);
Route::resource('crud/persPoder',persPoderController::class);
Route::resource('crud/tipoObjeto',tipoObjetoController::class);
Route::resource('crud/director',DirectorController::class);
Route::resource('crud/compannia',CompanniaController::class);
Route::resource('crud/medPelicula',medPeliculaController::class);
Route::resource('crud/medSerie',medSerieController::class);
Route::resource('crud/objeto',ObjetoController::class);
Route::get('crud/medSerie/reporte1', [medSerieController::class, 'reporte1']);
Route::get('crud/medPelicula/reporte2', [medPeliculaController::class, 'reporte2']);
Route::get('/registro', [AuthController::class, 'mostrarFormularioRegistro'])->name('registro');
Route::post('/registro', [AuthController::class, 'registro']);
Route::get('/login', [AuthController::class, 'mostrarFormularioLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('Reportes/reporte4', [ReporteController::class, 'locacionesMasCombates']);
Route::get('Reportes/reporte3', [ReporteController::class, 'objetosMasUsados']);
Route::get('Reportes/reporte5', [ReporteController::class, 'poderesArtificialesLideres']);
Route::get('Reportes/reporte6', [ReporteController::class, 'poderesHeredadosConSuper']);
Route::get('Reportes/reporte7', [ReporteController::class, 'reporteUsuarios'])->name('reporte.usuarios');
Route::get('Reportes/reporte8', [ReporteController::class, 'sedesPorOrganizacion'])->name('reporte.sedes');
