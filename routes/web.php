<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\ForgotPassword;/* Autenticacion */ 
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\User\UserProfile;/* Usuarios */
use App\Http\Livewire\Faculty\Table as FacultyTable;/* Facultad */
use App\Http\Livewire\Career\Table as CarrerTable;/* Carrera */
use App\Http\Livewire\Pensum\Table as PensumTable;/* Pensum */
use App\Http\Livewire\Semester\Table as SemestreTable;/* Semestre */
use App\Http\Livewire\Section\Table as SectionTable;/* Secciones */
use App\Http\Livewire\Course\Table as CourseTable;/* Course */
use App\Http\Livewire\Profesor\Table as ProfesorTable;/* Proferor */
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
    Route::get('/carrera', CarrerTable::class)->name('tabla-carrera');
    /* Rutas de Carrera */
    Route::get('/pensum', PensumTable::class)->name('tabla-pensum');
    /* Rutas de Semestre */
    Route::get('/semestre', SemestreTable::class)->name('tabla-semestre');
    /* Rutas de Semestre */
    Route::get('/sección', SectionTable::class)->name('tabla-sección');
    /* Rutas de Semestre */
    Route::get('/curso', CourseTable::class)->name('tabla-curso');
    /* Rutas de Semestre */
    Route::get('/catedratico', ProfesorTable::class)->name('tabla-catedratico');
    /* RUtas de Reportes */
    Route::get('/reportes', [Asistencia::class, 'index'])->name('reporte');
});

