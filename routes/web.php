<?php

use App\Http\Controllers\Studentscontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/students/all', function () {
//     return view('students.index');
// });s


Route::get('/students/all', [Studentscontroller::class, 'index'])->name('students.index');
Route::get('/students/create', [Studentscontroller::class, 'create'])->name('students.create');
Route::post('/students/store', [Studentscontroller::class, 'store'])->name('students.store');