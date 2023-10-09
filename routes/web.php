<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/signin', [UserController::class, 'index']);
Route::post('/signup', [UserController::class, 'store'])->name('signup');

Route::get('/login', [LoginController::class, 'index']);
Route::post('/log-in', [LoginController::class, 'login'])->name('login');

//logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('home');
});
 


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard/profile', [DashController::class, 'profile'])->name('dashboard.profile');
