<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\userController;
use App\Http\Controllers\grupoController;

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

Route::redirect('/', "dashboard");

//usuarios
Route::resource('users', userController::class);
Route::resource('grupos', grupoController::class);


//dashboard
//Route::get('grupos', 'App\Http\Controllers\adminController');
Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboardview');
