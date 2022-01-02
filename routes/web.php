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

Route::post('/updateName',[AccountController::class,'updateName']);
Route::get('/deleteAccount',[AccountController::class,'deleteAccount']);
Route::post('/updatePic',[AccountController::class,'updatePic']);

/**/
//------------------------------------------------------------------------------MANAGE RECOGNITION------------------------------------------------------------------------------------


//redirect to recognition started page
Route::get('/recognition', function () {//works
    return view('manageRecognition/manageRecognitionPage');
})->middleware(['auth']);



//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<STILL WORKING ON IT>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



Route::get('/loginkey', [LoginController::class,'loginkey']);

//Route::get('/',[HomeController::class,'getLogout']);







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
    return view('ManageTimer/timerPage');
})->middleware(['auth']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
