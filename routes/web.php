<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\BarController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\PiscinaController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\HabitacionController;
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




/* Creating views routes: */
Route::middleware('auth')->group(function () {
    Route::resource('sistema/categorias', CategoriaController::class);
    Route::resource('servicios/bar', BarController::class);
    Route::resource('servicios/restaurant', RestaurantController::class);
    Route::resource('servicios/piscina', PiscinaController::class);
    Route::resource('sistema/hotel', HotelController::class);
    Route::resource('sistema/profesor', ProfesorController::class);
    Route::resource('sistema/habitaciones', HabitacionController::class);
    Route::resource('sistema/carreras', CarreraController::class);
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
});



require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
