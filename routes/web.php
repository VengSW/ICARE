<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Fascades\Mail;
use Illuminate\Support\Fascades\Session;

use App\Http\Controllers\ManageRecognitionController;
use App\Http\Controllers\ManageRegistrationController;
use App\Http\Controllers\ManageExerciseController;
use App\Http\Controllers\ManageTimerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SessionController;
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

//DEFAULT
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);//verification mail

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//----------------------------------------------------------------------------MANAGE REGISTRATION--------------------------------------------------------------------------------
//route for register account


//Redirect to homepage
/*Route::get('/homepage', function () {
    return view('ManageRegistration/homepage');
});*/

//Redirect to  about page
Route::get('/about', function () {
    //$UserID =Auth::user();
    //dd ($UserID);
    
    return view('ManageRegistration/about');
})->middleware(['auth']);//require login 

Route::get('/updateName',[ManageRegistrationController::class,'updateName']);
Route::get('/deleteAccount',[ManageRegistrationController::class,'deleteAccount']);

/**/
//------------------------------------------------------------------------------MANAGE RECOGNITION------------------------------------------------------------------------------------
//Redirect to recognition page successfully
/*Route::get('/recognition', function () { //works
    return view('ManageRecognition/recognitionPage');
});*/
Route::post('/submit','App\Http\Controllers\ManageRecognitionController@create')->name('ManageRecognition.create')->middleware(['auth']);//Create record successfully

//redirect to recognition started page
Route::get('/startRecognition', function () {//works
    return view('manageRecognition/recognitionStartedPage');
})->middleware(['auth']);

Route::get('/recognition',[ManageRecognitionController::class,'viewRecognitionPage'])->name('ManageRecognition.viewRecognitionPage')->middleware(['auth']); //view recognition page

Route::get('/show/{recordID}', [ManageRecognitionController::class, 'show'])->name('ManageRecognition.show')->middleware(['auth']);//View record details

Route::get('/destroy/{recordID}', [ManageRecognitionController::class, 'destroy'])->name('ManageRecognition.destroy')->middleware(['auth']);// Delete record details


//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<STILL WORKING ON IT>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



Route::get('/loginkey', [LoginController::class,'loginkey']);

//Route::get('/',[HomeController::class,'getLogout']);


//test view recognition page with viewRecognitionPage()
//Route::get('/ManageRecognition/viewRecognitionPage/{id}','App\Http\Controllers\ManageRecognitionController@viewRecognitionPage')->name('ManageRecognition.viewRecognitionPage');//missing parameter





//Redirect to record details page
Route::get('/record', function () {
    return view('ManageRecognition/recordDetailsPage');
})->middleware(['auth']);




//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------

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
    return view('ManageTimer/timerSettingPage');
})->middleware(['auth']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
