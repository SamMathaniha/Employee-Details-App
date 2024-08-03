<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/* Route::get('/employees', function () {
    return view('index');
}) */;

Route::get('/employee',[EmployeeController::class,'index']);
Route::get('/employee/create',[EmployeeController::class,'create']);
Route::get('/employee/edit',[EmployeeController::class,'edit']);
Route::get('/employee/show',[EmployeeController::class,'show']);

