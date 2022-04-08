<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\EvetnsController;
use App\Http\Controllers\Backend\DashboardController as BackendDashboardController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Backend\BackendeventController;
use App\Http\Controllers\Backend\UsereventController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify'=>true]);

Route::get('/all_events', [EvetnsController::class,'all_Events'])->name('all_events');
Route::get('/', [EvetnsController::class,'Index'])->name('index');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['verified']], function () {

        Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
            // Route::get('showlimitevents', [UsereventController::class, 'ShowLimitEvents'])->name('showlimitevents');

        });
        Route::group(['namespace' => 'Backend', 'as' => 'backend.'], function () {
            Route::get('backend/dashboard', [DashboardController::class, 'index'])->name('dashboard');
            
            Route::post('createevent', [BackendeventController::class, 'Createevent'])->name('createevent');
            Route::post('createcategory', [BackendeventController::class, 'CreateCategory'])->name('createcategory');
        });
    });
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
