<?php

use Illuminate\Support\Facades\Route;

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

/**
 * laravel welcome route
 */
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

require __DIR__.'/auth.php';

Route::get('/dashboard', [
    \App\Http\Controllers\PostController::class, 'index'
])->middleware(['auth'])->name('dashboard');

Route::post('/dashboard', [\App\Http\Controllers\CommentController::class, 'create'])->name('dashboard.create');

/**
 * customer page
 */
Route::get('/user/{id}', [\App\Http\Controllers\UserController::class, 'show'])->name('user.show');

/**
 * admin-panel dashboard
 */
Route::get('/admin', [\App\Http\Controllers\AdminDashboard\DashboardController::class, 'index'])
    ->name('admin-panel');
