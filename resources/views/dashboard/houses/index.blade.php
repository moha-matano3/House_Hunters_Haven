@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('styles')
<style>
    .house-tile {
        border: 1px solid #ddd;
        padding: 15px;
        margin-bottom: 20px;
        text-align: center;
    }

    .house-tile img {
        width: 30%;
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
    .btn {
        float: right;
        margin: 20px;
    }
</style>
@endsection

@section('content')
<div class="container"> 
    <a href="{{ route('adverts.create') }}" class="btn btn-primary"><button>Add House</button></a>
    <h2>Houses</h2>

    <div class="row">
        @if(count($houses)>0)
        @foreach($houses as $house)
        <div class=" row">
            <div class="house-tile">
                <img src="{{ asset('storage/' .  $house->house_img) }}" alt="{{ $house->title }}" width="20%" height="20%">
                <h2>{{ $house->house_name }}</h2>
                <p>Town: {{ $house->town }}</p>
                <p>County: {{ $house->county }}</p>
                <p>Bedrooms: {{ $house->bedrooms }}</p>
                <p>Size: {{ $house->size }} sqft</p>
                <p>Status: {{ $house->status }} </p>
                <p>Price: {{ $house->price }} ksh</p>
                <div class="house-actions">
                    <a href="{{ route('adverts.edit', $house->id) }}" class="btn btn-info"><button>Edit</button></a>
                    <form action="{{ route('adverts.destroy', $house->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this house?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <p>No product found!</p>   
      @endif 
    </div>
</div>
@endsection



