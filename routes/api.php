<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//  API routes for your application

//Route::get('/lessons/{subject}/{grade}', [LessonController::class, 'getLessonsBySubjectAndGrade']);
//Route::get('/assessments/{subject}/{grade}', [AssessmentController::class, 'getAssessmentsBySubjectAndGrade']);
//Route::post('/register', [AuthController::class, 'register']);
//Route::post('/login', [AuthController::class, 'login']);

