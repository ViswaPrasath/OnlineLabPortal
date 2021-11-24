<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;

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
})->name('login');

Route::post('/doLogin', [AuthController::class,'doLogin']);

Route::get('/logout', [AuthController::class,'logout']);

Route::get('/dashboard', [DashboardController::class,'index']);

Route::get('/paper/add',[PaperController::class,'add']);

Route::post('/paper/store',[PaperController::class,'store']);

Route::get('/paper/edit/{id}',[PaperController::class,'edit']);

Route::get('/paper/delete/{id}',[PaperController::class,'delete']);

Route::post('/paper/update/{id}',[PaperController::class,'update']);

Route::get('/student/add',[StudentController::class,'add']);

Route::post('/student/store',[StudentController::class,'store']);

Route::get('/student/list', [StudentController::class,'list']);

Route::get('/student/show', [StudentController::class,'show']);

Route::get('/student/edit/{id}',[StudentController::class,'edit']);

Route::get('/student/delete/{id}',[StudentController::class,'delete']);

Route::post('/student/update/{id}',[StudentController::class,'update']);

Route::get('/class/list', [ClassController::class,'list']);

Route::post('/class/store', [ClassController::class,'store']);

Route::get('/class/add', [ClassController::class,'add']);

Route::get('/class/edit/{id}', [ClassController::class,'edit']);

Route::post('/class/update/{id}', [ClassController::class,'update']);

Route::get('/class/delete/{id}', [ClassController::class,'delete']);