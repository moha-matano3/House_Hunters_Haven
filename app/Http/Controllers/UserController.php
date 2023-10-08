<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    public function store(Request $request){

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
            return redirect('/login')->with('success', "Signup successful");
        } catch (QueryException $exception) {
            if ($exception->getCode() === '23000') {
                // Duplicate entry error
                return redirect()->back()->withInput()->withErrors(['error'=>'User already exists.']);
            } else {
                // Other database-related error
                return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred. Please try again later.']);
            }
        }
    }
}
