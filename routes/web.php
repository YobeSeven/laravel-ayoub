<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetForgotPasswordController;
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
    return view('home');
})->name('home');

//* FOR GUEST 
Route::middleware(['guest'])->group(function () {
    Route::get('auth/index/register',[RegisterController::class , 'index'])->name('register.index');
    Route::get('auth/index/login',[LoginController::class , 'index'])->name('login.index');
    Route::get('auth/index/forgot-password',[ForgotPasswordController::class , 'index'])->name('forgot-password.index');
    Route::get('auth/index/reset-forgot-password/{token}', [ResetForgotPasswordController::class , 'index'])->name('reset-forgot-password.index');
});
//* ROUTE BLADE AUTH
Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('auth/index/admin',[ProfileController::class , 'admin'])->name('profile.admin');
    });
    Route::get('auth/index/profile',[ProfileController::class , 'index'])->name('profile.index');
});


//* ROUTE FONCTION AUTH
Route::post('auth/store/register',[RegisterController::class , 'store'])->name('register.store');

Route::get('auth/store/login',[LoginController::class , 'store'])->name('login.store');

Route::get('auth/logout/profile',[ProfileController::class , 'logout'])->name('profile.logout');

Route::post('auth/store/forgot-password',[ForgotPasswordController::class , 'store'])->name('forgot-password.store');

Route::post('auth/store/reset-forgot-password',[ResetForgotPasswordController::class , 'store'])->name('reset-forgot-password.store');