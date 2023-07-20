<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\GestionController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\HorarioMateriaController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\OnlineController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::redirect('/', 'login', 301);

Route::redirect('/home', 'estudiantes', 301);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Route::prefix('admin')->group(function() {
    Route::resource('gestions', GestionController::class);
}); */

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
});

Route::resources([
    'gestions'      => GestionController::class,
    'periodos'      => PeriodoController ::class,
    'calificacions' => CalificacionController ::class,
    'actividads'    => ActividadController ::class,
    /* 'users'         => UserController::class, */
    'cursos'        => CursoController::class,
    'materias'      => MateriaController::class,
    'horarios'      => HorarioController::class,
    'horario-materias'      => HorarioMateriaController::class,
    'onlines'       => OnlineController::class,
    'inscripcions'  => InscripcionController::class,
    'calificacions' => CalificacionController::class,
    'asistencias'   => AsistenciaController::class,
]);

Route::get('/ofertas', [OfertaController::class, 'ofertas'])->name('ofertas.listar');

Route::get('/buscar', [BusquedaController::class, 'buscarGeneral'])->name('buscar.resultado');
Route::get('/estudiantes', [UserController::class, 'estudiantes'])->name('users.estudiantes');
Route::get('/meet/{info}', [OnlineController::class, 'classonline'])->name('onlines.classonline');
Route::get('/llenarasistencia', [OnlineController::class, 'llamarAsistencia'])->name('onlines.llenarasistencia');

Route::get('/boletin-pdf', [PDFController::class, 'boletinPDF'])->name('boletinPDF');
Route::get('/usuarios-pdf', [PDFController::class, 'usuariosPDF'])->name('usuariosPDF');

Route::get('/estadisticas', [PDFController::class, 'estadisticas'])->name('estadisticas');
