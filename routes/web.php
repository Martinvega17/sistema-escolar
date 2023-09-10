<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\BarController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\PiscinaController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use Spatie\Permission\Contracts\Role;

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

//Homepage route
Route::get('/', function () {
    return view('home/index');
});

// Login routes
Route::get('/register',  [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login',  [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/home',  [HomeController::class, 'index']);

Route::get('/logout',  [LogoutController::class, 'logout']);

// Auth
Route::get('/login', function () {
    return view('auth/login');
})->name('login');




Route::middleware('auth')->group(function () {
    Route::resource('sistema/profesor', ProfesorController::class);
    Route::resource('sistema/materias', MateriaController::class);
    Route::resource('sistema/carreras', CarreraController::class);
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);

});


//Password reset routes

Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
