<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    //
    public function create(){
        return view("auth.register");
    }
    public function store(){
        //
        $attributes = request()->validate([
            'first_name' => ['required', 'min:3'], // ✅ Use correct column name
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed']
        ]);
        
        $user = User::create($attributes);

        Auth::login($user);
        return redirect('/jobs');
    }
}
