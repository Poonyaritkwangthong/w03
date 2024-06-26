<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VaccineController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faculty',[FacultyController::class,'index']);
Route::get('/program',[ProgramController::class,'index']);
Route::get('/student',[StudentController::class,'index']);
Route::get('/vaccine',[VaccineController::class,'index']);
