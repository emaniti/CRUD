<?php

use App\Http\Controllers\Apis\AuthController;
use App\Http\Controllers\Apis\BookController;
use App\Http\Controllers\Apis\QuestionController;
use App\Http\Controllers\Apis\QuizController;
use App\Http\Controllers\Apis\SchoolClassesController;
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
Route::group(['guard' => 'api'],function () {

    Route::group(['prefix' => 'auth'],
        function () {
            //user and password
            Route::post('login', [AuthController::class, 'login']);
            Route::post('sign-up', [AuthController::class, 'signUp']);
        });
});
Route::group(['guard' => 'api', 'middleware' => ['auth:api']], function () {
    Route::group(['prefix' => 'admin'],
        function () {
            Route::get('books', [BookController::class, 'list_books']);
            Route::post('question', [QuestionController::class, 'add_question']);
            Route::get('grade-classes', [SchoolClassesController::class, 'listTeacherClasses']);
            Route::post('quize-create', [QuizController::class, 'createQuiz']);
            Route::get('quizes', [QuizController::class, 'listStudentQuiz']);
            Route::get('quiz/{quiz}', [QuizController::class, 'getQuiz']);
            Route::post('quiz/submit', [QuizController::class, 'submitQuiz']);
        });
});
