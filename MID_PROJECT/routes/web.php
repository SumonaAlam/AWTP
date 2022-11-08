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
    // if($request->cookie('remember') != null){
    //     if ($request->session()->get('roleCheck') == "STUDENT")
    //         return redirect()->route('studentDash');
    //     else
    //     return redirect()->route('creatorDash');
    // }
    return view('login');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');


Route::get('/student/dashboard',[StudentController::class, 'dashboard'])->name('studentDash')->middleware('validStudent');
Route::get('/student/learnSection',[LearnController::class, 'learn'])->name('learn')->middleware('validStudent');
Route::get('/student/subject/{id}',[LearnController::class, 'subject'])->name('subject')->middleware('validStudent');
Route::get('/student/topic/{id}',[LearnController::class, 'topic'])->name('topic')->middleware('validStudent');
Route::get('/student/retainSection',[RetainController::class, 'retain'])->name('retain')->middleware('validStudent');
Route::get('/student/summary',[RetainController::class, 'summary'])->name('summary')->middleware('validStudent');
Route::post('/student/summarySubmit',[RetainController::class, 'summarySubmit'])->name('summarySubmit')->middleware('validStudent');
Route::get('/student/summaryDetail/{id}',[RetainController::class, 'summaryDetail'])->name('summaryDetail')->middleware('validStudent');


Route::get('/creator/dashboard',[CreatorController::class, 'dashboard'])->name('creatorDash')->middleware('validCreator');
Route::post('/creator/content',[CreatorController::class, 'createContentSubmit'])->name('content')->middleware('validCreator');
Route::get('/creator/contentDetail/{id}',[CreatorController::class, 'contentDetail'])->name('contentDetail')->middleware('validCreator');

Route::get('/login',[LoginController::class,'loginShow'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/student/signUp',[RegController::class,'signUpShow'])->name('signUp');
Route::post('/student/signUp',[RegController::class, 'signUpSubmit'])->name('signUp');

Route::get('/creator/signup',[RegController::class,'signUpShowCreator'])->name('signUpCreator');
Route::post('/creator/signup',[RegController::class, 'signUpSubmitCreator'])->name('signUpCreator');

