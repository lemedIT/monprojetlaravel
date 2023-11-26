<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home'])
    ->name('app_home');

Route::get('/about', [HomeController::class, 'about'])
    ->name('app_about');

Route::match(['get', 'post'], '/dashboard', [HomeController::class, 'dashboard'])
    ->name('app_dashboard');

/* Ses routes sont désormais géré par fortify (normalement) */
/*
Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])
    ->name('app_login');

Route::match(['get', 'post'], '/register', [LoginController::class, 'register'])
    ->name('app_register');
*/
