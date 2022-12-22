<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RetainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\StudentController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/student/dashboard',[StudentController::class, 'dashboard'])->name('studentDash')->middleware('validStudent');
Route::get('/student/pros',[StudentController::class, 'pros'])->name('pros')->middleware('validStudent');
Route::get('/student/learnSection',[LearnController::class, 'learn'])->name('learn')->middleware('validStudent');
Route::get('/student/subject',[LearnController::class, 'subject'])->name('subject')->middleware('validStudent');
Route::get('/student/topic',[LearnController::class, 'topic'])->name('topic')->middleware('validStudent');
Route::get('/student/retainSection',[RetainController::class, 'retain'])->name('retain')->middleware('validStudent');
Route::get('/student/summary',[RetainController::class, 'summary'])->name('summary')->middleware('validStudent');
Route::post('/student/summarySubmit',[RetainController::class, 'summarySubmit'])->name('summarySubmit')->middleware('validStudent');
Route::get('/student/summaryDetail',[RetainController::class, 'summaryDetail'])->name('summaryDetail')->middleware('validStudent');
Route::get('/student/request',[RequestController::class, 'requestShow'])->name('request')->middleware('validStudent');
Route::get('/student/reqSession/{id}',[RequestController::class, 'reqSession'])->name('reqSession')->middleware('validStudent');
Route::post('/student/updateProfile', [StudentController::class, 'updateStudent']);
Route::get('/student/newData', [StudentController::class, 'newStudentData']);


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {


    // Route::post('logout', 'AuthController@logout');
    // Route::post('refresh', 'AuthController@refresh');
    // Route::post('me', 'AuthController@me');

});


Route::get('/creator/dashboard',[CreatorController::class, 'dashboard'])->name('creatorDash')->middleware('validCreator');
Route::get('/creator/proc',[CreatorController::class, 'proc'])->name('proc')->middleware('validCreator');
Route::post('/creator/content',[CreatorController::class, 'createContentSubmit'])->name('content')->middleware('validCreator');
Route::get('/creator/contentDetail',[CreatorController::class, 'contentDetail'])->name('contentDetail')->middleware('validCreator');
Route::post('/creator/updateProfile', [CreatorController::class, 'updateCreator']);
Route::get('/creator/newData', [CreatorController::class, 'newCreatorData']);

Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/student/signUp',[RegController::class, 'signUpSubmit'])->name('signUp');

Route::post('/creator/signup',[RegController::class, 'signUpSubmitCreator'])->name('signUpCreator');

