<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Public Landing Page
Route::get('/', function () {
    return view('welcome');
});

// FIXED: Adjusted the dot-notation path to look inside your "admin" directory!
Route::get('/dashboard', function () {
    $notes = \App\Models\Note::where('user_id', Auth::id())
        ->orderBy('is_pinned', 'desc')
        ->latest()
        ->get();

    return view('dashboard', compact('notes')); 
})->middleware(['auth', 'verified'])->name('dashboard');


// Kelola Notes (Manage Notes)
Route::middleware(['auth', 'verified'])->controller(NoteController::class)->group(function() {
    Route::get('notes/pinned', 'pinned')->name('notes.pinned');
    Route::get('notes/index', 'index')->name('notes.index');
    Route::get('notes/create', 'create')->name('notes.create');
    Route::post('notes/store', 'store')->name('notes.store');
    Route::get('notes/show/{id}', 'show')->name('notes.view'); 
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
    
    // Kept standard and simple
    Route::put('/category/{id}', 'update')->name('category.update'); 
    Route::delete('/category/{id}', 'destroy')->name('category.destroy'); 
});


// Kelola Profile (Manage Profile)
Route::middleware('auth')->controller(ProfileController::class)->group(function() {
    Route::get('/profile', 'edit')->name('profile.edit');
    Route::patch('/profile', 'update')->name('profile.update');
    Route::delete('/profile', 'destroy')->name('profile.destroy');
});

require __DIR__.'/auth.php';