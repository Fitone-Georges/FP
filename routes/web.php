<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/welcome', function () {
    return view('welcome');
})->name('home');
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/show',[PostController::class, 'display'])->name('show');

//from line 6-13 are the route the follows under the controller "AuthManager" retrieving and storing data inserted both in login and registration page
