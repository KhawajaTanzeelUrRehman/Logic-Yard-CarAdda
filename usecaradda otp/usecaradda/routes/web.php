<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ComparecarController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\UsedcarController;
use App\Http\Controllers\Frontend\UseddealearController;
use App\Http\Controllers\Frontend\CarsController;
use App\Http\Controllers\Frontend\SigninController;
use App\Http\Controllers\Frontend\SignupController;
use App\Http\Controllers\Frontend\ForgotpasswordController;
use App\Http\Controllers\Frontend\AdspostController;
use App\Http\Controllers\Frontend\LocationController;

use App\Http\Controllers\Frontend\SettingController;
use App\Http\Controllers\Frontend\CardetailsController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\ProfileController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {return view('welcome');});






Route::get('/', function () {
    return view('welcome');
});
  
  
Route::get('otp/login', [App\Http\Controllers\Auth\AuthOtpController::class, 'login'])->name('otp.login');
Route::get('otp/generate', [App\Http\Controllers\Auth\AuthOtpController::class, 'generate'])->name('otp.generate');
Route::get('otp/verification/{user_id}', [App\Http\Controllers\Auth\AuthOtpController::class, 'verification'])->name('otp.verification');
Route::post('otp/login', [App\Http\Controllers\Auth\AuthOtpController::class, 'loginWithOtp'])->name('otp.getlogin');


Route::get('/', [HomeController::class, 'index']);
Route::group(['middleware' => ['auth']], function () {
Route::get('/comparecar', [ComparecarController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/usedcar', [UsedcarController::class, 'index']);
Route::get('/useddealear', [UseddealearController::class, 'index']);
Route::get('/cars', [CarsController::class, 'index']);
Route::get('/signin', [SigninController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);
Route::get('/forgotpassword', [ForgotpasswordController::class, 'index']);
Route::get('/adspost', [AdspostController::class, 'index']);
Route::get('/location', [LocationController::class, 'index']);

Route::get('/setting', [SettingController::class, 'index']);
Route::get('/cardetails', [CardetailsController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
