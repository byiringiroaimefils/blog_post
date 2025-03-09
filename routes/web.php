<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [AuthController::class, 'showLoginForm']);


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


// Protected routes
Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

