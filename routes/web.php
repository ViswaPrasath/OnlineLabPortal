<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaperController;

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

Route::get('/login', function () {
    return view('login');
});

Route::post('/doLogin', [AuthController::class,'doLogin']);

Route::get('/dashboard', [DashboardController::class,'index']);

Route::get('/paper/add',[PaperController::class,'add']);

Route::post('/paper/store',[PaperController::class,'store']);

Route::get('/paper/edit/{id}',[PaperController::class,'edit']);

Route::get('/paper/delete/{id}',[PaperController::class,'delete']);

Route::post('/paper/update/{id}',[PaperController::class,'update']);