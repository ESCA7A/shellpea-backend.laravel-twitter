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
Route::get('/homepage', )->name('homepage');

/**
 * customer's page
 */
Route::get('/dashboard', [\App\Http\Controllers\TweetController::class, 'index']
)->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

use App\Http\Controllers\UserController;

//Route::resource([
//    '/user' => UserController::class,
//   '/user/{user}' =>  UserController::class,
//])->only(['index', 'show']);

Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/user', [UserController::class, 'index']);
