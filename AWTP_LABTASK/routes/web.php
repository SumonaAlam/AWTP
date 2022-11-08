<?php

use App\Http\Controllers\CreatorController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\RetainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/student/dashboard',[StudentController::class, 'dashboard'])->name('studentDash');
Route::get('/student/learnSection',[LearnController::class, 'learn'])->name('learn');
Route::get('/student/subject/{id}',[LearnController::class, 'subject'])->name('subject');
Route::get('/student/topic/{id}',[LearnController::class, 'topic'])->name('topic');
Route::get('/student/retainSection',[RetainController::class, 'retain'])->name('retain');
Route::get('/student/summary',[RetainController::class, 'summary'])->name('summary');
Route::post('/student/summarySubmit',[RetainController::class, 'summarySubmit'])->name('summarySubmit');




Route::get('/creator/dashboard',[CreatorController::class, 'dashboard'])->name('creatorDash');
Route::post('/creator/content',[CreatorController::class, 'createContentSubmit'])->name('content');
Route::get('/creator/contentDetail/{id}',[CreatorController::class, 'contentDetail'])->name('contentDetail');



Route::get('/login',[LoginController::class,'loginShow'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/student/signUp',[RegController::class,'signUpShow'])->name('signUp');
Route::post('/student/signUp',[RegController::class, 'signUpSubmit'])->name('signUp');

Route::get('/creator/signup',[RegController::class,'signUpShowCreator'])->name('signUpCreator');
Route::post('/creator/signup',[RegController::class, 'signUpSubmitCreator'])->name('signUpCreator');

