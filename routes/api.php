<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

use App\Http\Controllers\NoteController;

Route::get('/semesters/{programId}', [NoteController::class, 'getSemesters']);
Route::get('/subjects/{semesterId}', [NoteController::class, 'getSubjects']);
