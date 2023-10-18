@extends('layouts.app')
    <style>

        .create_form {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 60px;
            transform: translate(-50%, -50%);
        }
    </style>

@section('content')
<div class="create_form">
    <h1>Create a New House</h1><br>
    <form action="{{ route('adverts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="user-box">
            <label for="house_name">House Name:</label>
            <input type="text" name="house_name" class="form-control">
            @error('house_name')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div><br>
        <div class="user-box">
            <label for="price">Price:</label>
            <input type="number" name="price" class="form-control">
            @error('price')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div><br>
        <div class="user-box">
            <label for="town">Town:</label>
            <input type="text" name="town" class="form-control">
            @error('town')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div><br>
        <div class="user-box">
            <label for="location">County:</label>
            <input type="text" name="county" class="form-control">
            @error('county')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div><br>
        <div class="user-box">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control">
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div><br>
        <div class="user-box">
            <label for="bedrooms">Bedrooms:</label>
            <input type="number" name="bedrooms" class="form-control">
            @error('bedrooms')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div><br>
        <div class="user-box">
            <label for="size">Size:</label>
            <input type="number" name="size" class="form-control">
            @error('size')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div><br>
        <div class="user-box">
            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="rent">Rent</option>
                <option value="sell">Sell</option>
            </select>
            @error('status')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div><br>
        <div class="user-box">
            <label>Amenities:</label><br>
            <input type="checkbox" id="is_gym" name="is_gym" value="1">
            <label for="is_gym">Gym</label><br>
            <input type="checkbox" id="is_pool" name="is_pool" value="1">
            <label for="is_pool">Pool</label><br>
            <input type="checkbox" id="is_security" name="is_security" value="1">
            <label for="is_security">Security</label><br>
            <input type="checkbox" id="is_parking" name="is_parking" value="1">
            <label for="is_parking">Parking Space</label><br>
            <input type="checkbox" id="is_furnished" name="is_furnished" value="1">
            <label for="is_furnished">Fully Furnished</label><br>
            <input type="checkbox" id="is_gated" name="is_gated" value="1">
            <label for="is_gated">Gated Community</label><br>
            <input type="checkbox" id="is_wifi" name="is_wifi" value="1">
            <label for="is_wifi">Wifi</label><br>
           
        </div><br>
        <input class="submit" type="submit" value="Create House">
    </form>
</div>
@endsection
