<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;




Route::get('/', function () {
    return view('layout');
});



route::resource("/students", StudentController::class);
route::resource("/teachers", TeacherController::class);
route::resource("/courses", TeacherController::class);



