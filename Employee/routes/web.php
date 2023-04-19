<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;





Route::get('/',[EmployeeController::class,'employee'])->name('employee');

Route::post('employeedata_store',[EmployeeController::class,'employeedata_store'])->name('employeedata_store');
Route::get('list_employee',[EmployeeController::class,'list_employee'])->name('list_employee');
Route::resource('employeedata', EmployeeController::class);
Route::get('employee_destroy/{id}',[EmployeeController::class,'employee_destroy'])->name('employee_destroy');
Route::get('employee_edit/{id}',[EmployeeController::class,'employee_edit'])->name('employee_edit');
Route::post('employee_update',[EmployeeController::class,'employee_update'])->name('employee_update');


