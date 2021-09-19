<?php

use Illuminate\Support\Facades\Route;

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

//DEFAULT
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//------------------MANAGE REGISTRATION------------------------------
//route for register account
Route::get('/manageRegistration','ManageRegistrationController@index');

//Redirect to homepage
Route::get('/homepage', function () {
    return view('manageRegistration/homepage');
});
//Redirect to learn more page
Route::get('/learnmore', function () {
    return view('manageRegistration/learnmore');
});

//Redirect to recognition page
Route::get('/recognition', function () {
    return view('manageRecognition/recognitionPage');
});
//Redirect to recognition started page
Route::get('/recognitionStarted', function () {
    return view('manageRecognition/recognitionStartedPage');
});
//Redirect to record details page
Route::get('/record', function () {
    return view('manageRecognition/recordDetailsPage');
});
//Redirect to exercises page
Route::get('/exercise', function () {
    return view('manageExercise/exercisePage');
});
//Redirect to timer page
Route::get('/timer', function () {
    return view('manageTimer/timerSettingPage');
});