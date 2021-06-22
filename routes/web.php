<?php

use App\Http\Controllers\BitacorasController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Bitacoras\MostrarBitacoras;
use App\Http\Livewire\Maquinas\MostrarMaquinas;
use App\Http\Livewire\Plantas\MostrarPlantas;
use App\Http\Livewire\Reparaciones\MostrarReparaciones;
use App\Http\Livewire\Solicitudes\MostrarSolicitudes;
use App\Http\Livewire\Usuarios\Index;
use App\Http\Livewire\Usuarios\MostrarUsuarios;
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
    return view('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/bitacoras', function () {
//     return view('bitacoras');
// })->name('bitacoras');

// ruta de bitacoras
Route::get('/bitacoras', MostrarBitacoras::class)->name('bitacoras.index');

//  rutas de usuarios
Route::get('/usuarios', MostrarUsuarios::class)->name('usuarios.index');

// rutas de solicitudes
Route::get('/solicitudes', MostrarSolicitudes::class)->name('solicitudes.index');


Route::get('/reparaciones', MostrarReparaciones::class)->name('reparaciones.index');

Route::get('/maquinas', MostrarMaquinas::class)->name('maquinas.index');

Route::get('/plantas', MostrarPlantas::class)->name('plantas.index');

Route::get('/configuracion', function () {
    return view('configuracion');
})->name('configuracion');

require __DIR__.'/auth.php';
