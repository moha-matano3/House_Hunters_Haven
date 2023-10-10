@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit House</h1>

        <form action="{{ route('adverts.update', $house->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use PUT method for updates -->
        
            <div class="form-group">
                <label for="house_name">House Name:</label>
                <input type="text" name="house_name" class="form-control" value="{{ $house->house_name }}">
                @error('house_name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" class="form-control" value="{{ $house->price }}">
                @error('price')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" name="location" class="form-control" value="{{ $house->location }}" disabled>
                @error('location')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-control">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="bedrooms">Bedrooms:</label>
                <input type="number" name="bedrooms" class="form-control" value="{{ $house->bedrooms }}" disabled>
                @error('bedrooms')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="size">Size:</label>
                <input type="number" name="size" class="form-control" value="{{ $house->size }}" disabled>
                @error('size')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="amenities">Amenities:</label>
                <input type="text" name="amenities" class="form-control" value="{{ $house->amenities }}">
                @error('amenities')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <!-- Add more form fields for other house attributes -->
        
            <button type="submit" class="btn btn-primary">Update House</button>
        </form>
</div>
@endsection
