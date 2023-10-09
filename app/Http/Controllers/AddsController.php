<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\houses;

class AddsController extends Controller
{
    public function index()

    {
        $houses = houses::all();
      
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
            'location' => 'required|string|max:255',
            'image' => 'required', 
            'bedrooms' => 'required|integer',
            'size' => 'required|numeric',
            'amenities' => 'required|string|max:255',
           // 'bedrooms' => 'required|numeric',
         
        ]);
       
        $image_path = $request->file('image')->store('image', 'public');
    
        // Create and save the new house
        $house = new houses();
        $house->house_img = $image_path;
        $house->house_name = $request->house_name;
        $house->price = $request->price;
        $house->location = $request->location;
        $house->size = $request->size;
        $house->amenities = $request->amenities;
        $house->bedrooms = $request->bedrooms;
        $house->save(); 
        
    
        return redirect()->route('adverts.index')->with('success', 'House created successfully');
    }
    
    public function update(Request $request, $id)
{
    $validatedData= $request->validate([
        'house_name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'image' => 'sometimes|required', 
        'amenities' => 'required|string|max:255',
     
    ]);

    // Find the house to be updated
    $house = houses::find($id);

    // Update the house with the validated data
    $house->update($validatedData);

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