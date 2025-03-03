<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view("/","home",["name"=> "Saral Chauhan"]);
Route::view("/about","about");
Route::view("/contact","contact");

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(4);
    return view('jobs.index',['jobs' => $jobs] );
});

Route::get('/jobs/create', function () {
   
    return view('jobs.create');
});

//Create a new job
Route::post('/jobs', function () {
     request()->validate([
        'title' => ['required','string','min:3'],
        'salary' => ['required'],
    ]);
    //Vlaidation....

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);
    return redirect('/jobs');
    
});

//show a single job
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show',['job' => $job]);
});

//edit a single job
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit',['job' => $job] );
});


//update a single job
Route::patch('/jobs/{job}', function (Job $job) {
    request()->validate([
        'title' => ['required','string','min:3'],
        'salary' => ['required'],
    ]);

    //authoriza... (on hold)
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    
    return redirect("/jobs/$job->id");
});

//delete a single job
Route::delete('/jobs/{job}', function (Job $job)  {
    //authoriza... (on hold)
    $job->delete();
    return redirect('/jobs');
});