<?php

use App\Http\Controllers\NurburgringtrackController;
use App\Models\nurburgringtrack;
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

// Route::get('view', function () {
//     return view('cars');
// });

Route::get('/cars', [NurburgringtrackController::class,'index']);

