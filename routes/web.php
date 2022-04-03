<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\EvetnsController;
use App\Http\Controllers\Auth\LoginController;
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
Route::get('/', function () {
    return view('index');
});
Route::get('/all_events', [EvetnsController::class,'all_Events'])->name('all_events');
Route::get('/index', [EvetnsController::class,'Index'])->name('index');
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['verified']], function () {


    });
});




