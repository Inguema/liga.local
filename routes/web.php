<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PartidoController;
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

// Ruta inicio de la vista welcome
Route::get('/', [InicioController::class, 'index'])->name('welcome');

// Rutas clubs
Route::get('/clubs', [ClubController::class, 'index'])->name('club.index');
Route::get('/clubs/create', [ClubController::class, 'create'])->name('club.create');
Route::post('/clubs/store', [ClubController::class, 'store'])->name('club.store');
Route::get('/clubs/show/{club}', [ClubController::class, 'show'])->name('club.show');
Route::get('/clubs/edit/{club}', [ClubController::class, 'edit'])->name('club.edit');
Route::put('/clubs/update/{club}', [ClubController::class, 'update'])->name('club.update');
Route::get('/clubs/destroy/{club}', [ClubController::class, 'destroy'])->name('club.destroy');


// Rutas equipos
Route::get('/equipos', [EquipoController::class, 'index'])->name('equipo.index');
Route::get('/equipos/create/{club?}', [EquipoController::class, 'create'])->name('equipo.create');
Route::post('/equipos/store', [EquipoController::class, 'store'])->name('equipo.store');
Route::get('/equipos/show/{equipo}', [EquipoController::class, 'show'])->name('equipo.show');
Route::get('/equipos/edit/{equipo}', [EquipoController::class, 'edit'])->name('equipo.edit');
Route::put('/equipos/update/{equipo}', [EquipoController::class, 'update'])->name('equipo.update');
Route::get('/equipos/destroy/{equipo}', [EquipoController::class, 'destroy'])->name('equipo.destroy');

// Rutas jugadores
Route::get('/jugadores', [JugadorController::class, 'index'])->name('jugador.index');
Route::get('/jugadores/create', [JugadorController::class, 'create'])->name('jugador.create');
Route::post('/jugadores/store', [JugadorController::class, 'store'])->name('jugador.store');
Route::get('/jugadores/show/{jugador}', [JugadorController::class, 'show'])->name('jugador.show');
Route::get('/jugadores/edit/{jugador}', [JugadorController::class, 'edit'])->name('jugador.edit');
Route::put('/jugadores/update/{jugador}', [JugadorController::class, 'update'])->name('jugador.update');
Route::get('/jugadores/destroy/{jugador}', [JugadorController::class, 'destroy'])->name('jugador.destroy');

// Rutas partidos
Route::get('/partidos', [PartidoController::class, 'index'])->name('partido.index');
Route::get('/partidos/create', [PartidoController::class, 'create'])->name('partido.create');
Route::post('/partidos/store', [PartidoController::class, 'store'])->name('partido.store');
Route::get('/partidos/show/{partido}', [PartidoController::class, 'show'])->name('partido.show');
Route::get('/partidos/edit/{partido}', [PartidoController::class, 'edit'])->name('partido.edit');
Route::put('/partidos/update/{partido}', [PartidoController::class, 'update'])->name('partido.update');
Route::get('/partidos/destroy/{partido}', [PartidoController::class, 'destroy'])->name('partido.destroy');
