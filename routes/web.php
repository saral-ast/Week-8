<?php

use Illuminate\Support\Facades\Route;

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
    $jobs = [
        [
            'id'=> '1',
            'title'=> 'Software Developer',
            'description'=> 'This is a software developer job',
            'location'=> 'South Africa',
            'salary'=> '100000',
            
        ],
        [
            'id'=> '2',
            'title'=> 'Director',
            'description'=> 'This is a Director job',
            'location'=> 'New York',
            'salary'=> '100000',
        ],
        [
            'id'=> '3',
            'title'=> 'Web Developer',
            'description'=> 'This is a web developer job',
            'location'=> 'New York',
            'salary'=> '100000',
        ],
        [
            'id'=> '4',
            'title'=> 'Project Manager',
            'description'=> 'This is a project manager job',
            'location'=> 'New York',
            'salary'=> '100000',
        ],
    ];
    return view('jobs',['jobs' => $jobs] );
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id'=> '1',
            'title'=> 'Software Developer',
            'description'=> 'This is a software developer job',
            'location'=> 'South Africa',
            'salary'=> '$1000',
            
        ],
        [
            'id'=> '2',
            'title'=> 'Director',
            'description'=> 'This is a Director job',
            'location'=> 'New York',
            'salary'=> '$6000',
        ],
        [
            'id'=> '3',
            'title'=> 'Web Developer',
            'description'=> 'This is a web developer job',
            'location'=> 'New York',
            'salary'=> '$12000',
        ],
        [
            'id'=> '4',
            'title'=> 'Project Manager',
            'description'=> 'This is a project manager job',
            'location'=> 'New York',
            'salary'=> '$12330',
        ],
    ];

    $job = Arr::first( $jobs,fn($job) => $job['id'] == $id );
    return view('job',['job' => $job] );
});
