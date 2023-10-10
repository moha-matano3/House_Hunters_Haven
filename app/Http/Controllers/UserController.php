<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index() {
        return view('signin');
    }
    public function store(Request $request)
    {
       
     $request->validate([
            'image' => 'required',
            'firstname' => 'required',
            'identification' => 'required',
            'username' => 'required|min:3|max:10',
            'telephone' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
         ]);
        
       
         $image_path = $request->file('image')->store('image', 'public');
        // dd($image_path);
        $user = User::create([
            'firstname' => $request->firstname,
            'identification' => $request->identification,
            'username'=>$request->username,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'user_img' => $image_path,
            'user_code' => Str::random(20),
            'password' => Hash::make($request->password),
        ]);
        
        Auth::login($user);
        $save = $user->save();
       

        if($save){
            return redirect('/')->with('success','Successfully registered');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong');
        }
         //add to user table
      /*   $user = new Users;
         $user->firstname = $request->firstname;
         $user->identification = $request->identification;
         $user->username = $request->username;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->remember_token = $token;
         $user->save();  */

         

        // Return a JSON response
        //return response()->json(['message' => 'Signup successful']);
    }

    public function signup(Request $request){
      
        $validated_input = $request->validate([
            'user_img' => 'required',
            'firstname' => 'required',
            'identification' => 'required',
            'username' => 'required | min: 3 | max: 10',
            'telephone' => 'required',
            'email' => 'required',
            'password' => 'required | min: 6'
        ]);
    
        try {
            Users::create($validated_input);
            //return redirect('/login')->with('success', "Signup successful");
        } catch (QueryException $exception) {
            if ($exception->getCode() === '23000') {
                // Duplicate entry error
              //  return redirect()->back()->withInput()->withErrors(['error'=>'User already exists.']);
            } else {
                // Other database-related error
               // return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred. Please try again later.']);
            }
        }
    }
    
}
