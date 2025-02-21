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

use App\Http\Controllers\personalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personalform', [personalController::class, 'index']);

Route::post('/personalformkq', [personalController::class, 'display']);





