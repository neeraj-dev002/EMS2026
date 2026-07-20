<?php

Route::get("/attendance",function(){
return view("attendance.index");
})->name("attendance.index");