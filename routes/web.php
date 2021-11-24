<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\StudentController;

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

Route::get('/student/add',[StudentController::class,'add']);

Route::post('/student/store',[StudentController::class,'store']);

Route::get('/student/list', [StudentController::class,'list']);

Route::get('/student/edit/{id}',[StudentController::class,'edit']);

Route::get('/student/delete/{id}',[StudentController::class,'delete']);

Route::post('/student/update/{id}',[StudentController::class,'update']);
