<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/* Route::get('/employees', function () {
    return view('index');
}) */;

Route::get('/employee',[EmployeeController::class,'index'])->('employees.index');
Route::get('/employee/create',[EmployeeController::class,'create'])->name('employees.create');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employees.store');
/* Route::get('/employee/show',[EmployeeController::class,'show']);
 */
