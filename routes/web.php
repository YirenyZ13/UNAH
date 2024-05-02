<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\TelefonoController;
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

Route::get('/', function () {
    return view('Plantilla');
});


Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');

Route::post('/alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');

Route::get('/alumnos/{cuenta}', [AlumnoController::class, 'show'])->name('alumnos.show');

Route::get('/alumnos/{cuenta}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');

Route::put('/alumnos/{cuenta}', [AlumnoController::class, 'update'])->name('alumnos.update');

Route::delete('/alumnos/{cuenta}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');

Route::get('/alumnos/{cuenta}/telefonos', [TelefonoController::class, 'showTelefonos'])->name('alumnos.telefonos');
Route::delete('/alumnos/{cuenta}/borrar',[AlumnoController::class,'destroy'])->whereNumber('cuenta')->name('alumno.borrar');
