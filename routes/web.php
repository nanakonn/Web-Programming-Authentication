<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NurburgringtrackController;
use App\Models\nurburgringtrack;
use Illuminate\Auth\Events\Registered;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cars', [NurburgringtrackController::class,'index']);

Route::get('/login', [LoginController::class,'index']);

Route::get('/register', [RegisterController::class,'index']);

Route::post('/register', [RegisterController::class,'store']);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'validation']);

Route::get('/login/google', [LoginController::class, 'loginGoogle']);

Route::get('/login/google/callback', [LoginController::class, 'handlecallback']);

Route::get('logout', [LoginController::class, 'logout']);
