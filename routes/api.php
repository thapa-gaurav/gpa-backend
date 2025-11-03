<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::get('/students', [StudentController::class,'index']);
Route::post('/students',[studentController::class,'store']);
Route::post('/students/edit/{id}',[studentController::class,'edit']);
Route::post('/students/delete/{id}',[studentController::class,'destroy']);

