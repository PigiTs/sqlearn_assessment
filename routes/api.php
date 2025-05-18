<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});
//Student Routes
Route::get('/student', [StudentController::class,'index']);
Route::post('/student', [StudentController::class,'store']);
Route::get('/student/{id}', [StudentController::class,'show']);
Route::put('/student/{id}', [StudentController::class,'update']);
Route::delete('/student/{id}', [StudentController::class,'destroy']);

//Course Routes
Route::get('/course', [CourseController::class,'index']);
Route::post('/course', [CourseController::class,'store']);
Route::get('/course/{id}', [CourseController::class,'show']);
Route::put('/course/{id}', [CourseController::class,'update']);
Route::delete('/course/{id}', [CourseController::class,'destroy']);

//Enrollment-Completion Routes
Route::get('/enrollmentcompletion', [EnrollmentCompletionController::class,'index']);
Route::post('/enrollmentcompletion', [EnrollmentCompletionController::class,'store']);
Route::get('/enrollmentcompletion/{id}', [EnrollmentCompletionController::class,'show']);
Route::put('/enrollmentcompletion/{id}', [EnrollmentCompletionController::class,'update']);
Route::delete('/enrollmentcompletion/{id}', [EnrollmentCompletionController::class,'destroy']);

