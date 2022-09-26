<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

/**
 * laravel welcome route
 */
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', [\App\Http\Controllers\PostController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::prefix('/dashboard')->middleware(['auth'])->group(function () {

    /**
     * dashboard page
     */
    Route::resource('post', \App\Http\Controllers\PostController::class);
    Route::resource('comment', \App\Http\Controllers\CommentController::class);

    /**
     * customer page
     */
    Route::resource('user', \App\Http\Controllers\UserController::class);
    Route::resource('followers', \App\Http\Controllers\FollowerController::class);
    Route::resource('settings', \App\Http\Controllers\SettingsController::class);

});

/**
 * admin-panel dashboard
 */
Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\AdminDashboard\DashboardController::class, 'index'])->name('admin.show');
});
