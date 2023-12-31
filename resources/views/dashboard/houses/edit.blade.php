@extends('layouts.app')

<style>

        .edit_form {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 60px;
            transform: translate(-50%, -50%);
        }
    </style>

@section('content')
<div class="edit_form">
    <h1>Edit House</h1><br>

        <form action="{{ route('adverts.update', $house->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use PUT method for updates -->
            <div class="form-group">
                <label for="house_name">House Name:</label>
                <input type="text" name="house_name" class="form-control" value="{{ $house->house_name }}">
                @error('house_name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div><br>
        
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" class="form-control" value="{{ $house->price }}">
                @error('price')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div><br>
        
            <div class="form-group">
                <label for="town">Town:</label>
                <input type="text" name="town" class="form-control" value="{{ $house->town }}" disabled>
                @error('town')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div><br>

            <div class="form-group">
                <label for="county">County:</label>
                <input type="text" name="county" class="form-control" value="{{ $house->county }}" disabled>
                @error('county')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div><br>
        
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-control">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div><br>
        
            <div class="form-group">
                <label for="bedrooms">Bedrooms:</label>
                <input type="number" name="bedrooms" class="form-control" value="{{ $house->bedrooms }}" disabled>
                @error('bedrooms')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div><br>
        
            <div class="form-group">
                <label for="size">Size:</label>
                <input type="number" name="size" class="form-control" value="{{ $house->size }}" disabled>
                @error('size')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div><br>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="Rent" {{ $house->status == 'rent' ? 'selected' : '' }}>Rent</option>
                    <option value="Sell" {{ $house->status == 'sell' ? 'selected' : '' }}>Sell</option>
                </select>
                @error('status')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div><br>
        
            <div class="form-group">
                <label>Amenities:</label><br>
                <input type="checkbox" id="is_gym" name="is_gym" value="1" @if($house->is_gym) checked @endif>
                <label for="is_gym">Gym</label><br>
              
                <input type="checkbox" id="is_pool" name="is_pool" value="1" @if($house->is_pool) checked @endif>
                <label for="is_pool">Pool</label><br>
             
                <input type="checkbox" id="is_security" name="is_security" value="1" @if($house->is_security) checked @endif>
                <label for="is_security">Security</label><br>
             
                <input type="checkbox" id="is_parking" name="is_parking" value="1" @if($house->is_parking) checked @endif>
                <label for="is_parking">Parking Space</label><br>
               
                <input type="checkbox" id="is_furnished" name="is_furnished" value="1" @if($house->is_furnished) checked @endif>
                <label for="is_furnished">Fully Furnished</label><br>
               
                <input type="checkbox" id="is_gated" name="is_gated" value="1" @if($house->is_gated) checked @endif>
                <label for="is_gated">Gated Community</label><br>
              
                <input type="checkbox" id="is_wifi" name="is_wifi" value="1" @if($house->is_wifi) checked @endif>
                <label for="is_wifi">Wifi</label><br>
               
               
            </div><br>
        
            <!-- Add more form fields for other house attributes -->
        
            <button type="submit" class="btn btn-primary">Update House</button>
        </form>
</div>
@endsection
