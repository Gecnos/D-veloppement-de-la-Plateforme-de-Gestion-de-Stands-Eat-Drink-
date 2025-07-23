<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authenticated(Request $request){
        $validated = $request->validate([
            'email' => ['email', 'exists:users,email'],
            'password' => ['required', Password::min(8)]
        ]);
        

        if(Auth::attempt($validated)){
            return redirect('/contact');
        }
    }
}
