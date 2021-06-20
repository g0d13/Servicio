<?php

use App\Http\Controllers\UserController;
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

Route::get('/bitacoras', function () {
    return view('bitacoras');
})->name('bitacoras');

//  rutas de usuarios
Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::post('/usuarios/store', [UserController::class, 'store'])->name('usuarios.store');
Route::post('/usuarios/update/{id}', [UserController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/destroy/{id}', [UserController::class, 'destroy'])->name('usuarios.destroy');

Route::get('/solicitudes', function () {
    return view('solicitudes');
})->name('solicitudes');

Route::get('/reparaciones', function () {
    return view('reparaciones');
})->name('reparaciones');

Route::get('/maquinas', function () {
    return view('maquinas');
})->name('maquinas');

Route::get('/plantas', function () {
    return view('plantas');
})->name('plantas');

Route::get('/configuracion', function () {
    return view('configuracion');
})->name('configuracion');

require __DIR__.'/auth.php';
