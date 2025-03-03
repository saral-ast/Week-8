<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
class JobController extends Controller
{
    public function index(){
        $jobs = Job::with('employer')->latest()->simplePaginate(4);
        return view('jobs.index',['jobs' => $jobs] );
    }
    public function create(){
        return view('jobs.create');
    }
    public function store(){
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
    }
    public function show(Job $job){
        return view('jobs.show',['job' => $job]);
    }
    public function edit(Job $job){
        return view('jobs.edit',['job' => $job] );

    }
    public function update(Job $job){
        //authoriza... (on hold)
        request()->validate([
            'title' => ['required','string','min:3'],
            'salary' => ['required'],
        ]);
    
        
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
    
        
        return redirect("/jobs/$job->id");
    }
    public function destroy(Job $job){
        //authoriza... (on hold)
        $job->delete();
        return redirect('/jobs');
    }
}
