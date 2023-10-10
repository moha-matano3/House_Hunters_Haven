<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\houses;
use Illuminate\Support\Facades\Auth;

class AddsController extends Controller
{
    public function index()

    {
        $houses = houses::where('user_code', Auth::user()->user_code)->get();
      
        return view('dashboard.houses.index', compact('houses'));
    }

    public function create()
    {
    return view('dashboard.houses.create');
    }


    public function edit($id)
    {
      $house = houses::find($id);
      return view('dashboard.houses.edit', compact('house'));
    }


    public function store(Request $request)
    {
         $request->validate([
            'house_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'town' => 'required|string|max:255',
            'county' => 'required|string|max:255',
            'image' => 'required', 
            'bedrooms' => 'required|integer',
            'size' => 'required|numeric',
            'status' => 'required|in:rent,sell',

           
         
        ]);
            // Handle amenities checkboxes
         $isGym = $request->has('is_gym') ? 1 : 0;
         $isPool = $request->has('is_pool') ? 1 : 0;
         $isWifi = $request->has('is_wifi') ? 1 : 0;
         $isParking = $request->has('is_parking') ? 1 : 0;
         $isGated = $request->has('is_gated') ? 1 : 0;
         $isFurnished = $request->has('is_furnished') ? 1 : 0;
         $isSecurity = $request->has('is_security') ? 1 : 0;
       
        $image_path = $request->file('image')->store('image', 'public');
    
        // Create and save the new house
        $house = new houses();
        $house->house_img = $image_path;
        $house->house_name = $request->house_name;
        $house->price = $request->price;
        $house->town = $request->town;
        $house->county = $request->county;
        $house->location = $request->town;
        $house->size = $request->size;
        $house->bedrooms = $request->bedrooms;
        $house->status = $request->status;
        $house->is_gym = $isGym; 
        $house->is_pool = $isPool; 
        $house->is_gated = $isGated; 
        $house->is_wifi = $isWifi; 
        $house->is_parking = $isParking; 
        $house->is_furnished = $isFurnished; 
        $house->is_security = $isSecurity; 
        $house->user_code = Auth::user()->user_code;
        $house->save(); 
        
    
        return redirect()->route('adverts.index')->with('success', 'House created successfully');
    }
    
    public function update(Request $request, $id)
    {
        $validatedData= $request->validate([
        'house_name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'image' => 'sometimes|required', 
        'status' => 'sometimes|required|in:rent,sell',
     /*   'is_gym' => 'nullable|boolean',
        'is_pool' => 'nullable|boolean', 
        'is_security' => 'nullable|boolean', 
        'is_gated' => 'nullable|boolean', 
        'is_parking' => 'nullable|boolean', 
        'is_wifi' => 'nullable|boolean', 
        'is_furnished' => 'nullable|boolean', */
       
     
    ]);
    
    // Find the house to be updated
    $house = houses::find($id);


    // Update the house with the validated data
    $house->update([
        'house_name' => $validatedData['house_name'],
        'price' => $validatedData['price'],
        'status' => $validatedData['status'],
 
    ]);
      // If a new image is provided, update the image path
      if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $house->house_img = $imagePath;
       
     }
    // Handle amenities checkboxes
         $isGym = $request->has('is_gym') ? 1 : 0;
         $isPool = $request->has('is_pool') ? 1 : 0;
         $isWifi = $request->has('is_wifi') ? 1 : 0;
         $isParking = $request->has('is_parking') ? 1 : 0;
         $isGated = $request->has('is_gated') ? 1 : 0;
         $isFurnished = $request->has('is_furnished') ? 1 : 0;
         $isSecurity = $request->has('is_security') ? 1 : 0;

         $house->is_gym = $isGym; 
         $house->is_pool = $isPool; 
         $house->is_gated = $isGated; 
         $house->is_wifi = $isWifi; 
         $house->is_parking = $isParking; 
         $house->is_furnished = $isFurnished; 
         $house->is_security = $isSecurity; 
         $house->save();


        return redirect()->route('adverts.index')->with('success', 'House updated successfully');
    }


    public function destroy($id)
    {
        // Find the house to be deleted
        $house = houses::find($id);

        // Delete the house
        $house->delete();

        return redirect()->route('adverts.index')->with('success', 'House deleted successfully');
    }

}
