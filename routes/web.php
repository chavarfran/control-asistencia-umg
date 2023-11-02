<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\ForgotPassword;/* Autenticacion */ 
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\User\UserProfile;/* Usuarios */
use App\Http\Livewire\Faculty\Table as FacultyTable;/* Facultad */

use App\Http\Livewire\Career\Table as CareerTable;/* Carrera */
use App\Http\Livewire\Career\Create as CareerCreate;/* Carrera */
use App\Http\Livewire\Career\Edit as CareerEdit;/* Carrera */
use App\Http\Controllers\CareerController;

use App\Http\Livewire\Pensum\Table as PensumTable;/* Pensum */
use App\Http\Livewire\Pensum\Create as PensumCreate;/* Pensum */
use App\Http\Livewire\Pensum\Edit as PensumEdit;/* Pensum */
use App\Http\Controllers\PensumController;

use App\Http\Livewire\Semester\Table as SemestreTable;/* Semestre */
use App\Http\Livewire\Semester\Create as SemestreCreate;/* Semestre */
use App\Http\Livewire\Semester\Edit as SemestreEdit;/* Semestre */
use App\Http\Controllers\SemesterController;

use App\Http\Livewire\Section\Table as SectionTable;/* Secciones */
use App\Http\Livewire\Section\Create as SectionCreate;/* Secciones */
use App\Http\Livewire\Section\Edit as SectionEdit;/* Secciones */
use App\Http\Controllers\SectionController;

use App\Http\Livewire\Course\Create as CourseCreate;/* Course */
use App\Http\Livewire\Course\Table as CourseTable;/* Course */

use App\Http\Livewire\Profesor\Create as ProfesorCreate;/* Proferor */
use App\Http\Livewire\Profesor\Table as ProfesorTable;/* Proferor */
use App\Http\Livewire\Profesor\Dashboard as ProfesorDashboard;/* Proferor */

use App\Http\Livewire\Assignment\Table as AssignmentTable;/* Proferor */
use App\Http\Livewire\User\Table as UserTable;/* Usuario */
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Reports\Asistencia;
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

Route::get('/', function() {return redirect('/login');});
Route::get('/google-auth/redirect', function () { return Socialite::driver('google')->redirect();});
Route::get('/google-auth/callback', function () { $user = Socialite::driver('google')->user();});
Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');
Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    /* Rutas de Inicio */ 
    Route::get('/inicio', Dashboard::class)->name('dashboard');
    /* Rutas de Perfil */
    Route::get('/perfil', UserProfile::class)->name('perfil-usuario');
    /* Rutas de Facultad */
    Route::get('/facultad', FacultyTable::class)->name('tabla-facultad');
    /* Rutas de Carrera */
    Route::get('/carrera', CareerTable::class)->name('tabla-carrera');
    Route::get('/carrera/formulario', CareerCreate::class)->name('formulario-carrera');
    Route::get('/carrera/editar', CareerEdit::class)->name('editar-carrera');
    Route::put('/carrera/update/{id}', [CareerController::class, 'update'])->name('career-update');
    Route::post('/carrera/store', [CareerController::class, 'store'])->name('career-store');
    Route::post('/carrera/inhabilitar/{id}', [CareerController::class, 'inhabilitar'])->name('career-inhabilitar');
    Route::post('/carrera/habilitar/{id}', [CareerController::class, 'habilitar'])->name('career-habilitar');
    /* Rutas de Carrera */
    Route::get('/pensum', PensumTable::class)->name('tabla-pensum');
    Route::get('/pensum/formulario', PensumCreate::class)->name('formulario-pensum');
    Route::get('/pensum/editar', PensumEdit::class)->name('editar-pensum');
    Route::put('/pensum/update/{id}', [PensumController::class, 'update'])->name('pensum-update');
    Route::post('/pensum/store', [PensumController::class, 'store'])->name('pensum-store');
    Route::post('/pensum/inhabilitar/{id}', [PensumController::class, 'inhabilitar'])->name('pensum-inhabilitar');
    Route::post('/pensum/habilitar/{id}', [PensumController::class, 'habilitar'])->name('pensum-habilitar');
    /* Rutas de Semestre */
    Route::get('/semestre', SemestreTable::class)->name('tabla-semestre');
    Route::get('/semestre/formulario', SemestreCreate::class)->name('formulario-semestre');
    Route::get('/semestre/editar', SemestreEdit::class)->name('editar-semestre');
    Route::put('/semestre/update/{id}', [SemesterController::class, 'update'])->name('semestre-update');
    Route::post('/semestre/store', [SemesterController::class, 'store'])->name('semestre-store');
    Route::post('/semestre/inhabilitar/{id}', [SemesterController::class, 'inhabilitar'])->name('semestre-inhabilitar');
    Route::post('/semestre/habilitar/{id}', [SemesterController::class, 'habilitar'])->name('semestre-habilitar');
    /* Rutas de Semestre */
    Route::get('/seccion', SectionTable::class)->name('tabla-seccion');
    Route::get('/seccion/formulario', SectionCreate::class)->name('formulario-seccion');
    Route::get('/seccion/editar', SectionEdit::class)->name('editar-seccion');
    Route::put('/seccion/update/{id}', [SectionController::class, 'update'])->name('seccion-update');
    Route::post('/seccion/store', [SectionController::class, 'store'])->name('seccion-store');
    Route::post('/seccion/inhabilitar/{id}', [SectionController::class, 'inhabilitar'])->name('seccion-inhabilitar');
    Route::post('/seccion/habilitar/{id}', [SectionController::class, 'habilitar'])->name('seccion-habilitar');
    /* Rutas de Semestre */
    Route::get('/curso', CourseTable::class)->name('tabla-curso');
    Route::get('/curso/formulario', CourseCreate::class)->name('formulario-curso');
    /* Rutas de Catedratico */
    Route::get('/catedratico', ProfesorTable::class)->name('tabla-catedratico');
    Route::get('/catedratico/formulario', ProfesorCreate::class)->name('formulario-catedratico');
    Route::get('/catedratico/inicio/', ProfesorDashboard::class)->name('inicio-catedratico');
    /* Rutas de Asignatura */
    Route::get('/asignación', AssignmentTable::class)->name('tabla-asignatura');
    /* Rutas de Usuarios */
     Route::get('/usuario', UserTable::class)->name('tabla-usuario');
    /* RUtas de Reportes */
    Route::get('/reportes', [Asistencia::class, 'index'])->name('reporte');
});

