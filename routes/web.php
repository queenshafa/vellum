<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Public & Static Views Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Fallback Redirect - Keeps everything perfectly synchronized
Route::get('/dashboard', function () {
    return redirect()->route('notes.index');
})->middleware(['auth', 'verified'])->name('dashboard');


// Kelola Notes (Manage Notes Group)
Route::middleware(['auth', 'verified'])->controller(NoteController::class)->group(function() {
    Route::get('notes/pinned', 'pinned')->name('notes.pinned');
    Route::get('notes/index', 'index')->name('notes.index');
    Route::get('notes/create', 'create')->name('notes.create');
    Route::post('notes/store', 'store')->name('notes.store');
    
    // Kept parameters as {id} to match your explicit controller code style!
    Route::get('notes/show/{id}', 'show')->name('notes.show'); 
    Route::get('notes/edit/{id}', 'edit')->name('notes.edit');
    Route::put('notes/update/{id}', 'update')->name('notes.update');
    Route::delete('notes/destroy/{id}', 'destroy')->name('notes.destroy');
    Route::post('notes/toggle-pin/{id}', 'togglePin')->name('notes.togglePin');
});


// Kelola Kategori (Manage Categories)
Route::middleware(['auth', 'verified'])->controller(CategoryController::class)->group(function() {
    Route::get('/category', 'index')->name('category.index');
    Route::get('/category/create', 'create')->name('category.create');
    Route::post('/category', 'store')->name('category.store');
    Route::get('/category/edit/{id}', 'edit')->name('category.edit');
    Route::put('/category/update/{id}', 'update')->name('category.update'); // Fixed name suffix mismatch here
});


// Kelola Profile (Manage Profile)
Route::middleware('auth')->controller(ProfileController::class)->group(function() {
    Route::get('/profile', 'edit')->name('profile.edit');
    Route::patch('/profile', 'update')->name('profile.update');
    Route::delete('/profile', 'destroy')->name('profile.destroy');
});

require __DIR__.'/auth.php';