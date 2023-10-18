<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\ForgotPassword;/* Autenticacion */ 
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\User\UserProfile;/* Usuarios */
use App\Http\Livewire\Projects\Table as ProjectsTable;/* Usuarios */

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
    Route::get('/inicio', Dashboard::class)->name('dashboard');
    Route::get('/perfil', UserProfile::class)->name('perfil-usuario');
    Route::get('/proyectos', ProjectsTable::class)->name('proyectos');
});

