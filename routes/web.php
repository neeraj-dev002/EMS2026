<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


Route::get('/', function () {
    return view('index');
});

// employees routes

Route::get("/employees",[EmployeeController::class,"index"])->name("employees.index");

Route::get("/employees/create",[EmployeeController::class,"create"])->name("employees.create");

Route::post("/employees",[EmployeeController::class,"store"])->name("employees.store");

Route::get("/employees/{id}",[EmployeeController::class,"show"])->name("employees.show");

//delete employee route
Route::delete("/employees/{id}",[EmployeeController::class,"destroy"])->name("employees.destroy");

Route::get("/departments",function(){
   return view("/departments/index");
});