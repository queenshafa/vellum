<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NoteController;
use Illuminate\Support\Facades\Route;

// Public & Static Views
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $notes = auth()->user()->notes()
        ->orderBy('is_pinned', 'desc')
        ->latest()
        ->get();

    return view('dashboard', compact('notes')); // points to your working notes folder view!
})->middleware(['auth', 'verified'])->name('dashboard');


// Kelola Notes (Manage Notes)
Route::middleware(['auth', 'verified'])->controller(NoteController::class)->group(function() {
    Route::get('/notes/pinned', [NoteController::class, 'pinned'])->name('notes.pinned');
    Route::get('notes/index', 'index')->name('notes.index');
    Route::get('notes/create', 'create')->name('notes.create');
    Route::post('notes/store', 'store')->name('notes.store');
    Route::get('notes/show/{note}', 'show')->name('notes.view');
    Route::get('notes/edit/{note}', 'edit')->name('notes.edit');
    Route::put('notes/update/{note}', 'update')->name('notes.update');
    Route::delete('notes/destroy/{note}', 'destroy')->name('notes.destroy');
    Route::post('notes/toggle-pin/{note}', 'togglePin')->name('notes.togglePin');
});


// Kelola Kategori (Manage Categories)
Route::middleware(['auth', 'verified'])->controller(CategoryController::class)->group(function() {
    Route::get('admin/category', 'index')->name('admin.category.index');
    Route::get('admin/category/create', 'create')->name('admin.category.create');
    Route::post('admin/category/store', 'store')->name('admin.category.store');
});


// Kelola Profile (Manage Profile)
Route::middleware('auth')->controller(ProfileController::class)->group(function() {
    Route::get('/profile', 'edit')->name('profile.edit');
    Route::patch('/profile', 'update')->name('profile.update');
    Route::delete('/profile', 'destroy')->name('profile.destroy');
});


require __DIR__.'/auth.php';