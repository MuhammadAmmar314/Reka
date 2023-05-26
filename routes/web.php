<?php

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

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/about', [App\Http\Controllers\DashboardController::class, 'about']);

Route::get('/admin', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);

Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index']);


Route::resource('/admin/fitur', App\Http\Controllers\FiturController::class);
Route::resource('/admin/karir', App\Http\Controllers\KarirController::class);

Route::get('/admin/about', [App\Http\Controllers\AboutController::class, 'index']);
Route::put('/admin/about/{id}', [App\Http\Controllers\AboutController::class, 'update']);