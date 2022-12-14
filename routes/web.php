<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [LandingController::class,'index']);

Route::get('/about',[LandingController::class,'about']);

Route::get('/destination', [LandingController::class,'destination']);

Route::get('/contact', [LandingController::class,'contact']);

Route::get('/test', [LandingController::class,'dashboard']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');


//admin
route::group(['middleware' => ['role:Admin'],'prefix' => 'admin',],function(){

    //Route::get('/', [DashboardController::class,'index'])->name('admin.dashboard');

});
