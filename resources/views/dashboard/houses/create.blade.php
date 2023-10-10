@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a New House</h1>
    <form action="{{ route('adverts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="house_name">House Name:</label>
            <input type="text" name="house_name" class="form-control">
            @error('house_name')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" class="form-control">
            @error('price')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="town">Town:</label>
            <input type="text" name="town" class="form-control">
            @error('town')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="location">County:</label>
            <input type="text" name="county" class="form-control">
            @error('county')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control">
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="bedrooms">Bedrooms:</label>
            <input type="number" name="bedrooms" class="form-control">
            @error('bedrooms')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <input type="number" name="size" class="form-control">
            @error('size')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="amenities">Amenities:</label>
            <input type="text" name="amenities" class="form-control">
            @error('amenities')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <!-- Add more form fields for other house attributes -->

        <button type="submit" class="btn btn-primary">Create House</button>
    </form>
</div>
@endsection
