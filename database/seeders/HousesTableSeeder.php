<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $houses = [
            [
                'house_img' => 'image1.jpg',
                'house_name' => 'Beautiful Villa',
                'size' => '2000 sqft',
                'bedrooms' => 4,
                'amenities' => 'Swimming Pool, Garden',
                'location' => '123 Main Street, City',
                'price' => 500000,
            ],
            [
                'house_img' => 'image2.jpg',
                'house_name' => 'Cozy Apartment',
                'size' => '1000 sqft',
                'bedrooms' => 2,
                'amenities' => 'Balcony, Gym',
                'location' => '456 Elm Street, Town',
                'price' => 250000,
            ],
            // Add more house data here
        ];

        // Insert the data into the 'houses' table
        DB::table('houses')->insert($houses);
        
        
        
    }
}
