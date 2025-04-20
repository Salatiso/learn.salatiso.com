<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Enjoy building your web!
|
*/

// Homepage
Route::get('/', [PageController::class, 'index'])->name('home');

// Online Learning
Route::get('/online-learning', [PageController::class, 'onlineLearning'])->name('online-learning');

// Self-Driven Learning
Route::get('/self-driven-learning', [PageController::class, 'selfDrivenLearning'])->name('self-driven-learning');

// Printable Resources
Route::get('/printables', [PageController::class, 'printableResources'])->name('printables');
Route::get('/printables/grade/{grade}', [PageController::class, 'showGradeResources'])->name('printables.grade');

// User Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Support
Route::get('/support', [PageController::class, 'showSupport'])->name('support');

// Authentication
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
