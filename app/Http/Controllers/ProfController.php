<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfController extends Controller
{ 
    public function profile(){
        $user = Auth::user();
        return view('dashboard.profile.prof', compact('user'));
    }
    public function edit($id)
    {
      $user = User::find($id);
      return view('dashboard.profile.update', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validatedData= $request->validate([
        'firstname' => 'required|string|max:255',
        'image' => 'sometimes|required', 
        'username' => 'required|min:3|max:10',
     
    ]);
    
    // Find the house to be updated
    $user = User::find($id);


    // Update the house with the validated data
    $user->update([
        'firstname' => $validatedData['firstname'],
        'username' => $validatedData['username'],
        
    ]);
      // If a new image is provided, update the image path
      if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $user->user_img = $imagePath;
        $user->save();
    }


        return redirect()->route('dashboard.profile.prof')->with('success', 'House updated successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('/signup')->with('success', 'User deleted successfully');
    }
}
