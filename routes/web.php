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

Route::get('/employee',[EmployeeController::class,'index'])->name('employees.index');
Route::get('/employee/create',[EmployeeController::class,'create'])->name('employees.create');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employees.store');
Route::get('/employee/{id}',[EmployeeController::class,'show'])->name('employees.show');
Route::get('/employee/{id}/edit',[EmployeeController::class,'edit'])->name('employees.edit');
Route::put('/employee/{employees}',[EmployeeController::class,'update'])->name('employees.update');

