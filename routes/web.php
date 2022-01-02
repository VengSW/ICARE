<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Fascades\Mail;
use Illuminate\Support\Fascades\Session;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

//Redirect to welcome page
Route::get('/', function () {
    return view('welcome');
});
//verification mail
Auth::routes(['verify' => true]);
//redirect to home after login successful
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//MANAGE REGISTRATION
//Redirect to  about page
Route::get('/about', function () {
    return view('ManageRegistration/about');
})->middleware(['auth']);

Route::post('/updateName',[AccountController::class,'updateName']); //update user's name
Route::get('/deleteAccount',[AccountController::class,'deleteAccount']); //delete user's account
Route::post('/updatePic',[AccountController::class,'updatePic']); //update user's profile picture


//MANAGE RECOGNITION------------------------------------------------------------------------------------


//redirect to recognition started page
Route::get('/recognition', function () {//works
    return view('manageRecognition/manageRecognitionPage');
})->middleware(['auth']);



//MANAGE EXERCISE------------------------------------------------------------------------------------------
//Redirect to exercises page
Route::get('/exercise', function () {
    return view('ManageExercise/exercisePage');
})->middleware(['auth']);

//Redirect to correct sitting page
Route::get('/correctSitting', function () {
    return view('ManageExercise/correctSitting');
})->middleware(['auth']);

//Redirect to tips page
Route::get('/tips', function () {
    return view('ManageExercise/tips');
})->middleware(['auth']);

//Redirect to timer page
Route::get('/timer', function () {
    return view('ManageTimer/timerPage');
})->middleware(['auth']);

Auth::routes();

