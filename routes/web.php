<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Landing Page
Route::get('/', function () {
    return view('pages.landing');
});

// About Page
Route::get('/about', function () {
    return view('pages.about');
});

// Notes Page
Route::get('/notes', function () {
    return view('pages.note');
});
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');

// Contributer Page
Route::get('/contributer', function () {
    return view('pages.contributer');
});

// Contact Page (GET - Show form)
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Contact Page (POST - Handle form submit)
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Dashboard (only for authenticated and verified users)
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes (edit, update, delete) for authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__ . '/auth.php';
