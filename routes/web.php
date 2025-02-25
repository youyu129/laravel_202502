<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', function () {
    return redirect()->route('students.index');
});

Route::get('/students', function () {
    return view('student.index');
})->name('students.index');

Route::get('/students/create', function () {
    return view('student.create');
})->name('students.create');

Route::get('/students/edit', function () {
    return view('student.edit');
})->name('students.edit');

Route::resource('students', StudentController::class);