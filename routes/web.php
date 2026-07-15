<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});



Route::get("/employees",function(){
    return view("/employees/index");
     
});

Route::get("/employees/create",function(){
    return view("/employees/create");
});

Route::get("/employees/{id}",function($id){
   return view("/employees/show",["id"=>$id]);
});


Route::get("/departments",function(){
   return view("/departments/index");
});