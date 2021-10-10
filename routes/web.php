<?php

use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ElectionController;
use App\Http\Controllers\Auth\EmailVerifyController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::view('', 'index');
Route::view('billing', 'billing');

Route::middleware(['guest'])->group(function () {
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store']);
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'auth']);

    Route::get('forgot-password', [ForgotPasswordController::class, 'index'])
        ->name('password.request');
    Route::post('forgot-password', [ForgotPasswordController::class, 'forgot'])
        ->name('password.email');
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'reset'])
        ->name('password.reset');
    Route::post('reset-password', [ForgotPasswordController::class, 'update'])
        ->name('password.update');
});

Route::middleware(['auth'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('email/verify', [EmailVerifyController::class, 'index'])
        ->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', [EmailVerifyController::class, 'verify'])
        ->name('verification.verify')
        ->middleware('signed');
    Route::post('email/verify/resend', [EmailVerifyController::class, 'resend'])
        ->name('verification.send')
        ->middleware('throttle:6,1');

    Route::middleware(['verified'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('elections', [ElectionController::class, 'index'])->name('elections');
        Route::get('elections/create', [ElectionController::class, 'show'])->name('elections.create');
        Route::post('elections/create', [ElectionController::class, 'store']);
        Route::get('elections/{id}', [ElectionController::class, 'view'])->name('elections.show');
        Route::get('elections/{id}/applications', [ElectionController::class, 'application'])->name('elections.application');
        Route::get('elections/{id}/settings', [ElectionController::class, 'setting'])->name('elections.settings');

        Route::get('profile', [AdminProfileController::class, 'show'])->name('profile');
    });
});

Route::view('join-vote', 'auth.join-vote');
