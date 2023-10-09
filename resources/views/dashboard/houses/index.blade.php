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
</style>
@endsection

@section('content')
<div class="container"> 
    <h1>Houses</h1>

    <!-- Add House Button -->
    <a href="{{ route('adverts.create') }}" class="btn btn-primary">Add House</a>

    <div class="row">
        @foreach($houses as $house)
        <div class=" row">
            <div class="house-tile">
                <img src="{{  $house->image_path }}" alt="{{ $house->title }}">
                <h2>{{ $house->house_name }}</h2>
                <p>Price: ${{ $house->price }}</p>
                <p>Location: {{ $house->location }}</p>
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



