<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }else{
            return redirect('/login')->with('failed', 'Wrong Credetials');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
