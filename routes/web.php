<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
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

Route::get('/', function() {
	return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/* LANDING controller
------------------------------------
*/
Route::get('/landing', [LandingController::class,'index']);

/* HOME controller
------------------------------------
*/
Route::get('/blogbootstrap', function() {
	// return view('blogbootstrap');
	// or
	// taruh css di public
	// return View::make('blogbootstrap');	
});

// Route::get('/', "HomeController@index");
// Route::get('/', "App\Http\Controllers\HomeController@index");
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'index']);

// Route::get('/', function() {
// 	Voyager::routes();
// });