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

/**
 * homepage
 */
Route::get('/homepage', [\App\Http\Controllers\TweetController::class, 'index'])->name('homepage');

/**
 * customer's page
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
