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

