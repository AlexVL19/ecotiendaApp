<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

Route::get('/login', [SessionController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::get('/register', [RegistroController::class, 'create'])
    ->name('register.index');

Route::post('/register', [RegistroController::class, 'store'])
    ->name('register.store');

Route::post('/login', [SessionController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionController::class, 'destroy'])
    ->name('login.destroy');

Route::get('/details', [SessionController::class, 'show'])
    ->name('login.show');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');