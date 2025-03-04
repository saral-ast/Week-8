<?php

use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobController;



Route::view("/","home",["name"=> "Saral Chauhan"]);
Route::view("/about","about");
Route::view("/contact","contact");


Route::controller(JobController::class)->group(function(){
    Route::get("/jobs","index");
    Route::get("/jobs/create","create")
        ->middleware('auth');

    Route::get("/jobs/{job}","show");
    Route::get("/jobs/{job}/edit","edit")
            ->middleware('auth')
            ->can('edit','job');

    Route::post("/jobs","store");
    Route::patch("/jobs/{job}","update")
            ->middleware('auth');
            
    Route::delete("/jobs/{job}","destroy")
        ->middleware('auth');
    
});


//auth
Route::get("/register",[RegisterUserController::class,"create"]);
Route::post("/register",[RegisterUserController::class,"store"]);

Route::get("/login",[SessionController::class,"create"])->name('login');
Route::post("/login",[SessionController::class,"store"]);
Route::post("/logout",[SessionController::class,"destroy"]);







