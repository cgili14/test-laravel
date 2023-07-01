<?php

use Illuminate\Support\Facades\Route;
//Ciudades
use App\Http\Livewire\Ciudades\Listado as ListadoCiudades;
use App\Http\Livewire\Ciudades\Nueva as NuevaCiudad;
//Provincias
use App\Http\Livewire\Provincias\Listado as ListadoProvincias;
use App\Http\Livewire\Provincias\Nueva as NuevaProvincia;

use App\Http\Livewire\Home;

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

Route::get('/', Home::class)->name('home');

Route::get('/ciudades', ListadoCiudades::class)->name('ciudades');
Route::get('/ciudades/nueva', NuevaCiudad::class)->name('nueva-ciudad');
Route::get('/ciudades/{idCiudad}', NuevaCiudad::class)->name('edita-ciudad');

Route::get('/provincias', ListadoProvincias::class)->name('provincias');
Route::get('/provincias/nueva', NuevaProvincia::class)->name('nueva-provincia');
Route::get('/provincias/{idProvincia}', NuevaProvincia::class)->name('edita-provincia');
