<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\houses;

class IndexController extends Controller
{
    public function search(Request $request)
{
    $query=$request->input('query');
    $houses=houses::where('house_name','LIKE','%'.$query.'%')
            ->orWhere('location', 'LIKE', '%' . $query . '%')
            ->orderBy('id','DESC')->paginate(5);
    
    return view('dashboard.listings', compact('houses'));
}


public function filter(Request $request)
{
    // Get the selected criteria from the request
    $bedrooms = $request->input('bedrooms');
    $size = $request->input('size');
    $status = $request->input('status');
    $numericSize = intval(preg_replace('/[^0-9]/', '', $size));
    $selectedAmenities = $request->input('amenities', []);

    $query = houses::where('bedrooms', $bedrooms)
                   ->orWhere('size', '<',  $numericSize) 
                   ->orWhere('status', $status) ;
                  
       // If any amenities are selected, add them to the query
       if (!empty($selectedAmenities)) {
        foreach ($selectedAmenities as $amenity) {
            $query->orWhere($amenity, 1); // Assuming amenities are stored as boolean fields
        }
    }

    // Execute the query and get the filtered houses
    $houses = $query->get();


    return view('dashboard.listings', ['houses' => $houses]);
}


}
