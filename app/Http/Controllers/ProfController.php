<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfController extends Controller
{ 
    public function profile(){
        return view('profile.prof');
    }
    public function edit($id)
    {
      $user = User::find($id);
      return view('profile.update', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('/signup')->with('success', 'User deleted successfully');
    }
}
