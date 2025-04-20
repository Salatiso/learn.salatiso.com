<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController; // Add this line

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

// About Us
Route::get('/about', [PageController::class, 'showAbout'])->name('about');

// Learning Paths
Route::get('/learning-paths', [PageController::class, 'showLearningPaths'])->name('learning-paths');

// Resource Library
Route::get('/resource-library', [PageController::class, 'showResourceLibrary'])->name('resource-library');

// Printable Resources
Route::get('/printables', [PageController::class, 'showPrintables'])->name('printables');
Route::get('/printables/grade/{grade}', [PageController::class, 'showGradeResources'])->name('printables.grade');

// User Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Support
Route::get('/support', [PageController::class, 'showSupport'])->name('support');

// Contact Us
Route::get('/contact', [ContactController::class, 'showContact'])->name('contact'); // Add this line
Route::post('/contact/send', [ContactController::class, 'sendMessage'])->name('contact.send'); // And this line

// My Books
Route::get('/books', [PageController::class, 'showBooks'])->name('books'); // And this line

// Authentication
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
