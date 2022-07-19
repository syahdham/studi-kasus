<?php

use Illuminate\Support\Facades\Route;

Route::view('login', 'auth.login')->name('login');
Route::post('login', [\App\Http\Controllers\Auth\AuthController::class, 'doLogin'])->name('doLogin');

Route::get('shipping/{ekspedisi}', [\App\Http\Controllers\ShippingController::class, 'shipping']);
Route::get('shippingo/{ekspedisi}', [\App\Http\Controllers\ShippingController::class, 'shippingo']);

Route::get('pegawai', [\App\Http\Controllers\PegawaiMetroController::class, 'pegawaiMetro']);

Route::middleware(['auth'])->group(function () {
    Route::view('/', 'dashboard')->name('dashboard');
    Route::post('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

    Route::resource('profile', \App\Http\Controllers\ProfileController::class)->only(['edit', 'update']);
    Route::post('change/password', App\Http\Controllers\ChangePasswordController::class)->name('change.password');

    Route::prefix('admin')->group(function () {
        Route::resource('roles', \App\Http\Controllers\RoleController::class);
        Route::resource('users', \App\Http\Controllers\UserController::class);
        Route::resource('permissions', \App\Http\Controllers\PermissionController::class);
        Route::resource('status', \App\Http\Controllers\StatusPengajuanController::class);
    });
});
