<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function ($name = 'Saral Chauhan') {
    
    return view('home', ['name'=> $name]);
});
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::view("/","home",["name"=> "Saral Chauhan"]);
Route::view("/about","about");
Route::view("/contact","contact");

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->simplePaginate(4);
    return view('jobs',['jobs' => $jobs] );
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job',['job' => $job] );
});
