<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

// Homepage
Route::get('/', [PageController::class, 'index'])->name('home');

// Online Learning
Route::get('/online-learning', [PageController::class, 'onlineLearning'])->name('online-learning');

// Self-Driven Learning
Route::get('/self-driven-learning', [PageController::class, 'selfDrivenLearning'])->name('self-driven-learning');

// Printable Resources
Route::get('/printables', [PageController::class, 'printableResources'])->name('printables');

// User Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Support
Route::get('/support', [PageController::class, 'showSupport'])->name('support');

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

//Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Privacy Policy
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

// Terms of Service
Route::get('/terms-of-service', function () {
    return view('terms-of-service');
})->name('terms-of-service');
