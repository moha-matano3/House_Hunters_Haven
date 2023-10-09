<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    public function index() {
        return view('login');
    }
    public function login(Request $request){
        $this->validate($request, [
            'email'=>'email|required|exists:users,email',
            'password'=>'required|min:4',
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            session()->regenerate();

            return redirect('dashboard')->with('success','You are logged in');
        }
        else{
            return back()->with('error','Invalid email & password!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
