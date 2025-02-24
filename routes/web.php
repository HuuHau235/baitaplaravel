<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\calculateController;
// // use App\Http\Controllers\TestController;

// // Route::get('/', function () {
// //     return view('welcome');
// // });

// // Route::get('/welcome', [calculateController::class, 'index']); 

// Route::post('/calculate', [calculateController::class, 'calculateTotal']);

// Route::get('/', function () {
//     return view('Test');
// });

// Route::get('/', [\App\Http\Controllers\TestController::class, 'total']);

// Route::get('/', [\App\Http\Controllers\PostController::class, 'index']);

// Route::get('/', [\App\Http\Controllers\PostController::class, 'create']);

// use App\Http\Controllers\personalController;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/personalform', [personalController::class, 'index']);

// Route::post('/personalformkq', [personalController::class, 'display']);

// use App\Http\Controllers\CovidController;

// Route::get('/covid-summary', [CovidController::class, 'index']);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\CovidController;

Route::get('/student', [DisplayController::class, 'showForm']);
Route::post('/student', [DisplayController::class, 'display']);
Route::get('/welcome', [CovidController::class, 'getData']);



