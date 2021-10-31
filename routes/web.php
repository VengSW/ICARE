<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Fascades\Mail;
use Illuminate\Support\Fascades\Session;

use App\Http\Controllers\ManageRecognitionController;
use App\Http\Controllers\ManageExerciseController;
use App\Http\Controllers\ManageTimerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SessionController;
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

Auth::routes(['verify' => true]);//verification mail

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//----------------------------------------------------------------------------MANAGE REGISTRATION------------------------------
//route for register account


//Redirect to homepage
/*Route::get('/homepage', function () {
    return view('ManageRegistration/homepage');
});*/

//Redirect to learn more page
Route::get('/learnmore', function () {
    return view('ManageRegistration/learnmore');
});


/**/
//------------------------------------------------------------------------------MANAGE RECOGNITION------------------------------------------------------------------------
//Redirect to recognition page successfully
/*Route::get('/recognition', function () { //works
    return view('ManageRecognition/recognitionPage');
});*/
Route::post('submit','App\Http\Controllers\ManageRecognitionController@create')->name('ManageRecognition.create');//Create record successfully



//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<STILL WORKING ON IT>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

Route::get('/data', [SessionController::class,'data']);
Route::get('/try', [SessionController::class,'try']);
Route::get('/try3', [SessionController::class,'try3']);
Route::get('/try2/{id}',[SessionController::class,'try2']);

//Route::get('/',[SessionController::class,'getLogout']);



Route::get('/recognition/{id}',[ManageRecognitionController::class,'show'])->name('ManageRecognition.show');





//test view recognition page with viewRecognitionPage()
Route::get('/ManageRecognition/viewRecognitionPage/{id}','App\Http\Controllers\ManageRecognitionController@viewRecognitionPage')->name('ManageRecognition.viewRecognitionPage');//missing parameter



//redirect to recognition started page
Route::get('/startRecognition', function () {//works
    return view('manageRecognition/recognitionStartedPage');
});
















//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//Redirect to record details page
Route::get('/record', function () {
    return view('ManageRecognition/recordDetailsPage');
});
//Redirect to exercises page
Route::get('/exercise', function () {
    return view('ManageExercise/exercisePage');
});
//Redirect to timer page
Route::get('/timer', function () {
    return view('ManageTimer/timerSettingPage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
