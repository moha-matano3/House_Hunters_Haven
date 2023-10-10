@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('styles')
<style>
    .house-tile {
        border: 1px solid #ddd;
        padding: 115px;
        margin-bottom: 20px;
        text-align: center;
    }

    .house-tile img {
        max-width: 100%;
        height: auto;
    }

    .house-actions {
        margin-top: 10px;
    }
    .row {
        display: flex;
        flex-wrap: wrap;
        padding: 0 4px;
    }
    a {
        text-decoration: none;
        color: black;
    }
    .btn {
        float: right;
        margin: 20px;
    }
</style>
@endsection

@section('content')
<div class="container"> 
    <h1><a href="/">House Hunters' Haven</a></h1><br><br>
    <a href="{{ route('adverts.create') }}" class="btn btn-primary"><button>Add House</button></a>
    <h2>Houses</h2>

    <div class="row">
        @foreach($houses as $house)
        <div class=" row">
            <div class="house-tile">
                <img src="{{  $house->image_path }}" alt="{{ $house->title }}">
                <h2>{{ $house->house_name }}</h2>
                <p>Town: {{ $house->town }}</p>
                <p>County: {{ $house->county }}</p>
                <p>Bedrooms: {{ $house->bedrooms }}</p>
                <p>Size: {{ $house->size }}</p>
                <p>Amenities: {{ $house->amenities }}</p>
                <p>Price: ${{ $house->price }}</p>
                <div class="house-actions">
                    <a href="{{ route('adverts.edit', $house->id) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('adverts.destroy', $house->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this house?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection



