<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        //validate
        //add more password rules  later
        $fields = $request->validate([
            'username'=>['required', 'max:255'],
            'email'=>['required','max:255','email'],
            'password'=>['required', 'confirmed', 'min:3']
        ]);

        //create user instance
        $user = User::create($fields);

        //login
        Auth::login($user);

        //redirect to dashboard
        return redirect('/')->with('success', 'Welcome to the Library!');
    }
}
