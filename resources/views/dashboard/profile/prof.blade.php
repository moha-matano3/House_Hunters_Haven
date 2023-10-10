@extends('layouts.app')

@section('content')
<div class="container"> 
    <h1><a href="/">House Hunters' Haven</a></h1><br><br>
    
    <h2>Profile</h2>
        <div class="profile_deck">
            <img src="{{ asset('storage/'. $user->user_img) }}" alt="profile_pic">
            <p>{{ $user->firstname }}</p><br><br>
            <p>Username: {{ $user->username }}</p><br><br>
            <p>Identification: {{ $user->identification }}</p><br><br>
            <p>Telephone: {{ $user->telephone }}</p><br><br>
            <p>Email: {{ $user->email }}</p><br><br>
           
            <div class="profile-action">
                <a href="{{ route('dashboard.profile.edit', $user->id) }}" class="btn btn-info"><button>Edit</button></a>
                <form action="{{ route('dashboard.profile.destroy', $user->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete account?')">Delete Account</button>
                </form>
                </div>
            </div>
</div>
@endsection