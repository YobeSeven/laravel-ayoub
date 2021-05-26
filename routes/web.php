<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetForgotPasswordController;
use App\Http\Controllers\Auth\SettingProfileController;
use App\Http\Controllers\Mail\MailController;
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
    Route::get('guest/register',[RegisterController::class , 'index'])->name('register.index');
    Route::get('guest/login',[LoginController::class , 'index'])->name('login.index');
    Route::get('guest/forgot-password',[ForgotPasswordController::class , 'index'])->name('forgot-password.index');
    Route::get('guest/reset-forgot-password/{token}', [ResetForgotPasswordController::class , 'index'])->name('reset-forgot-password.index');
});

//* ROUTE BLADE AUTH
Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('auth/admin',[ProfileController::class , 'admin'])->name('profile.admin');
    });
    Route::get('auth/profile',[ProfileController::class , 'index'])->name('profile.index');
    Route::get('auth/setting/profile',[SettingProfileController::class , 'index'])->name('setting-profile.index');
});

//* ROUTE FONCTION AUTH
Route::post('register',[RegisterController::class , 'store'])->name('register.store');
Route::get('login',[LoginController::class , 'store'])->name('login.store');
Route::get('logout',[ProfileController::class , 'logout'])->name('profile.logout');
Route::post('forgot-password',[ForgotPasswordController::class , 'store'])->name('forgot-password.store');
Route::post('reset-forgot-password',[ResetForgotPasswordController::class , 'store'])->name('reset-forgot-password.store');
Route::post('send/email',[MailController::class , 'store'])->name('mail.store');
Route::put('update/profile',[SettingProfileController::class , 'updateProfile'])->name('setting-profile.updateProfile');
Route::put('update/password',[SettingProfileController::class , 'updatePassword'])->name('setting-profile.updatePassword');