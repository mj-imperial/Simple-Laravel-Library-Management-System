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

    public function login(Request $request){
        //validate fields
        $fields = $request->validate([
            'email'=>['required','max:255','email'],
            'password'=>['required']
        ]);

        //attempt to log-in
        if(Auth::attempt($fields, $request->remember)){
            //regenerate sessions to prevent session fixation
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors(['failed'=>'Credentials do not match our database.']);
    }

    public function logout(Request $request){
        //logout
        Auth::logout();

        //invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        //redirect
        return redirect('/')->with('logout', 'You have successfully logged out.');
    }
}
