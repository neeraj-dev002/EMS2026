<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\departmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;



Route::get("/",function(){
    if(auth()->check()){
        return redirect()->route("dashboard");
    }
    else{
        return redirect()->route("login");
    }
});



Route::middleware("auth")->group(function(){


// employees routes

Route::get("/employees",[EmployeeController::class,"index"])->name("employees.index");

Route::get("/employees/create",[EmployeeController::class,"create"])->name("employees.create");

Route::post("/employees",[EmployeeController::class,"store"])->name("employees.store");

Route::get("/employees/{id}",[EmployeeController::class,"show"])->name("employees.show");

Route::get("/employees/{id}/edit",[EmployeeController::class,"edit"])->name("employees.edit");

//update employee route
Route::put("/employees/{id}",[EmployeeController::class,"update"])->name("employees.update");


//delete employee route
Route::delete("/employees/{id}",[EmployeeController::class,"destroy"])->name("employees.destroy");



//Departments routes
Route::get("/departments",[departmentController::class,"index"])->name("departments.index");


//create department route
 Route::get("/departments/create",[departmentController::class,"create"] )->name("departments.create");


 //store department route
 Route::post("/departments",[departmentController::class,"store"] )->name("departments.store");

//edit department route
Route::get("/departments/{id}/edit",[departmentController::class,"edit"])->name("departments.edit");    

 //update department route
 Route::put("/departments/{id}",[departmentController::class,"update"])->name("departments.update");


 //delete department route
 Route::delete("/departments/{id}",[departmentController::class,"destroy"])->name("departments.destroy");


}); 



 
 

 require __DIR__.'/auth.php';