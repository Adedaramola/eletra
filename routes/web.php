<?php

use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ElectionController;
use App\Http\Controllers\Auth\EmailVerifyController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CandidateApplicationController;
use App\Http\Controllers\VotingController;
use Illuminate\Support\Facades\Route;

Route::view('', 'index');
Route::view('billing', 'billing');


Route::get('vote/auth', [VotingController::class, 'index']);
Route::view('vote', 'vote.index');

Route::get('elections/join', [CandidateApplicationController::class, 'index'])->name('candidate.apply');
Route::post('elections/join', [CandidateApplicationController::class, 'store']);

Route::middleware(['guest'])->group(function () {
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store']);
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'auth']);

    Route::get('forgot-password', [ForgotPasswordController::class, 'index'])
        ->name('password.request');
    Route::post('forgot-password', [ForgotPasswordController::class, 'forgot'])
        ->name('password.email');
    Route::get('reset-password/{token}', [ResetPasswordController::class, 'reset'])
        ->name('password.reset');
    Route::post('reset-password', [ResetPasswordController::class, 'update'])
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
        Route::get('elections/{election}', [ElectionController::class, 'view'])->name('elections.show');
        Route::get('elections/{election}/applications', [ElectionController::class, 'application'])->name('elections.application');
        Route::get('elections/{id}/settings', [ElectionController::class, 'setting'])->name('elections.settings');
        Route::delete('elections/{election}', [ElectionController::class, 'destroy'])->name('elections.destroy');

        Route::get('elections/{id}/candidate', [CandidateController::class, 'show'])->name('candidate');
        Route::post('elections/{id}/candidate', [CandidateController::class, 'store']);


        Route::get('profile', [AdminProfileController::class, 'show'])->name('profile');
        Route::put('profile/{user}', [AdminProfileController::class, 'update'])->name('profile.update');
        Route::delete('profile', [AdminProfileController::class, 'delete'])->name('profile.delete');
    });
});
