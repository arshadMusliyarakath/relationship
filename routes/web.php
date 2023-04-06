<?php

use App\Models\Course;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $students = Student::all();
    return view('hasone', compact('students'));
})->name('hasone.relationship');

Route::get('belongsTo', function () {
    $courses = Course::all();
    return view('belongsTo', compact('courses'));
})->name('belongsTo.relationship');



