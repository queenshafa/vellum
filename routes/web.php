<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login-asli', function () {
    return view('login-asli');
});

Route::get('/register-asli', function () {
    return view('register-asli');
});

Route::get('/dasbor', function () {
    return view('admin.dashboard');
});

Route::get('/category', function () {
    return view('admin.categories.category');
});

Route::get('/category/create', function () {
    return view('admin.categories.create');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
