<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\CarController;
// use App\Http\Controllers\UserController;
//  use App\Http\Controllers\ListofvendorsController;
// use App\Http\Controllers\AdvertiseController;
// use App\Http\Controllers\PostaddController;
// use App\Http\Controllers\PostlistController;
// // use App\Http\Controllers\CarbodiesController;
// use App\Http\Controllers\CarbrandController;
// use App\Http\Controllers\CarfeaturesController;
// use App\Http\Controllers\CarspecificationController;
// use App\Http\Controllers\SubbrandController;
// use App\Http\Controllers\SubbrandmodelController;
// use App\Http\Controllers\CartypeController;
// use App\Http\Controllers\CarcitiesController;
// use App\Http\Controllers\CarcountriesController;
// use App\Http\Controllers\CarstateController;
// use App\Http\Controllers\CarfuelController;
// use App\Http\Controllers\KilometerController;
// use App\Http\Controllers\CarownerController;
// use App\Http\Controllers\CarpricesController;
// use App\Http\Controllers\TransmissionController;
// use App\Http\Controllers\YearController;
// use App\Http\Controllers\ProfilesettingController;



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


// Route::resource('/', function () {
//     return view('welcome');
// });

Route::resource('/', 'App\Http\Controllers\HomeController');
Route::group(['middleware' => ['auth']], function () { 
Route::resource('car', 'App\Http\Controllers\CarController');
Route::resource('user', 'App\Http\Controllers\UserController');
Route::resource('listofvendors', 'App\Http\Controllers\ListofvendorsController');
Route::resource('advertise', 'App\Http\Controllers\AdvertiseController');
Route::resource('postadd', 'App\Http\Controllers\PostaddController');
Route::resource('postlist', 'App\Http\Controllers\PostlistController');
Route::resource('carbrand', 'App\Http\Controllers\CarbrandController');
Route::resource('carfeature', 'App\Http\Controllers\CarfeaturesController');
Route::resource('carspecification', 'App\Http\Controllers\CarspecificationController');
Route::resource('carsubbrand', 'App\Http\Controllers\SubbrandController');
Route::resource('carsubbrandmodel', 'App\Http\Controllers\SubbrandmodelController');
Route::resource('cartype', 'App\Http\Controllers\CartypeController');
Route::resource('carcities', 'App\Http\Controllers\CarcitiesController');
Route::resource('carcountries','App\Http\Controllers\CarcountriesController');
Route::resource('carstate', 'App\Http\Controllers\CarstateController');
Route::resource('carfuels', 'App\Http\Controllers\CarfuelController');
Route::resource('kilometer', 'App\Http\Controllers\KilometerController');
Route::resource('carowner', 'App\Http\Controllers\CarownerController');
Route::resource('carprices', 'App\Http\Controllers\CarpricesController');
Route::resource('transmission', 'App\Http\Controllers\TransmissionController');
Route::resource('year', 'App\Http\Controllers\YearController');
Route::resource('profilesetting', 'App\Http\Controllers\ProfilesettingController');


Route::resource('students','App\Http\Controllers\StudentController');

Route::resource('carbodies', 'App\Http\Controllers\CarbodiesController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::resource('logout', 'App\Http\Controllers\LogoutController');

Auth::routes();