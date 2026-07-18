<?php

 
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;



Route::get("/register",[RegisteredUserController::class,"create"])->middleware("guest")->name("register");

Route::post("/register",[RegisteredUserController::class,"store"]);

//login Form
Route::get("/login",[AuthenticatedSessionController::class,"create"
])->middleware("guest")->name("login");


//Login Submit
Route::post("/login",[AuthenticatedSessionController::class,"store"])->middleware("guest");