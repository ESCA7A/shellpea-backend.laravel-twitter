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

Route::get('/', function () {
    return view('welcome', ['name' => 'Pavel']);
})->name('welcome.view');

use App\Http\Controllers\TweetController;

Route::get('homepage', [TweetController::class, 'tweets'])->name('homepage.tweets');
