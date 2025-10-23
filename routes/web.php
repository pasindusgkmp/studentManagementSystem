<?php

use App\Http\Controllers\Studentscontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'students'], function(){
    Route::get('/all', [Studentscontroller::class, 'index'])->name('students.index');
    Route::get('/create', [Studentscontroller::class, 'create'])->name('students.create');
    Route::post('/store', [Studentscontroller::class, 'store'])->name('students.store');
    Route::get('/{student_id}', [Studentscontroller::class, 'edit'])->name('students.edit');
    Route::put('/{student_id}', [Studentscontroller::class, 'update'])->name('students.update');
});

