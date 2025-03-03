<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;


Route::view("/","home",["name"=> "Saral Chauhan"]);
Route::view("/about","about");
Route::view("/contact","contact");

Route::controller(JobController::class)->group(function(){
    Route::get("/jobs","index");
    Route::get("/jobs/create","create");
    Route::get("/jobs/{job}","show");
    Route::get("/jobs/{job}/edit","edit");
    Route::post("/jobs","store");
    Route::patch("/jobs/{job}","update");
    Route::delete("/jobs/{job}","destroy");
    
});
