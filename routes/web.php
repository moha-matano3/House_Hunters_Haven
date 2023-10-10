<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddsController;
use App\Http\Controllers\ProfController;
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

//my adds
Route::get('/adverts', [AddsController::class, 'index'])->name('adverts.index');
Route::get('/adverts/create', [AddsController::class, 'create'])->name('adverts.create');
Route::post('/adverts/store', [AddsController::class, 'store'])->name('adverts.store');
Route::get('/adverts/edit/{id}', [AddsController::class, 'edit'])->name('adverts.edit');
Route::delete('/adverts/destroy/{id}', [AddsController::class, 'destroy'])->name('adverts.destroy');
Route::put('/adverts/update{id}', [AddsController::class, 'update'])->name('adverts.update');

//profile
Route::get('/profile/prof', [ProfController::class, 'prof'])->name('dashboard.profile.prof');
Route::delete('/profile/prof/destroy/{id}', [ProfController::class, 'destroy'])->name('dashboard.profile.destroy');
Route::patch('/profile/update{id}', [ProfController::class, 'update'])->name('dashboard.profile.update');






Route::get('/', function () {
    return view('home');
});
 

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard/profile', [ProfController::class, 'profile'])->name('dashboard.profile');
