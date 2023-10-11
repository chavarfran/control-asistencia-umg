<?php

use Illuminate\Support\Facades\Route;
/* Autenticacion */ 
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;

/* Usuarios */
use App\Http\Livewire\User\UserProfile;
/* Facultad */
use App\Http\Livewire\Faculty\Table as FacultyTable;
/* Carrera */
use App\Http\Livewire\Career\Table as CarrerTable;
/* Pensum */
use App\Http\Livewire\Pensum\Table as PensumTable;

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
    /* Rutas de inicio */ 
    Route::get('/Inicio', Dashboard::class)->name('dashboard');

    /* Rutas de perfil */
    Route::get('/Perfil', UserProfile::class)->name('perfil-usuario');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');

    /* Rutas de facultad */
    Route::get('/Facultad', FacultyTable::class)->name('tabla-facultad');

    /* Rutas de Carrera */
    Route::get('/Carrera', CarrerTable::class)->name('tabla-carrera');

     /* Rutas de Carrera */
     Route::get('/Pensu', PensumTable::class)->name('tabla-pensum');

     /* RUtas de reportes */
     Route::get('/Reportes', [Asistencia::class, 'index'])->name('reporte');
});

