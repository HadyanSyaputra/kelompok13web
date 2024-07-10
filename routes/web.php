<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Matakuliah295Controller;
use App\Http\Controllers\Nilai296Controller;

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

// Routes Login

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->middleware('auth');

// Routes untuk Matakuliah295Controller
Route::get('/matakuliah295', [Matakuliah295Controller::class, 'index'])->name('matakuliah295.index');
Route::get('/matakuliah295/create', [Matakuliah295Controller::class, 'create'])->name('matakuliah295.create');
Route::post('/matakuliah295', [Matakuliah295Controller::class, 'store'])->name('matakuliah295.store');
Route::get('/matakuliah295/{matakuliah295}', [Matakuliah295Controller::class, 'show'])->name('matakuliah295.show');
Route::get('/matakuliah295/{matakuliah295}/edit', [Matakuliah295Controller::class, 'edit'])->name('matakuliah295.edit');
Route::put('/matakuliah295/{matakuliah295}', [Matakuliah295Controller::class, 'update'])->name('matakuliah295.update');
Route::delete('/matakuliah295/{matakuliah295}', [Matakuliah295Controller::class, 'destroy'])->name('matakuliah295.destroy');

// Routes untuk Nilai296Controller
Route::get('/nilai296', [Nilai296Controller::class, 'index'])->name('nilai296.index');
Route::get('/nilai296/create', [Nilai296Controller::class, 'create'])->name('nilai296.create');
Route::post('/nilai296', [Nilai296Controller::class, 'store'])->name('nilai296.store');
Route::get('/nilai296/{nilai296}', [Nilai296Controller::class, 'show'])->name('nilai296.show');
Route::get('/nilai296/{nilai296}/edit', [Nilai296Controller::class, 'edit'])->name('nilai296.edit');
Route::put('/nilai296/{nilai296}', [Nilai296Controller::class, 'update'])->name('nilai296.update');
Route::delete('/nilai296/{nilai296}', [Nilai296Controller::class, 'destroy'])->name('nilai296.destroy');
