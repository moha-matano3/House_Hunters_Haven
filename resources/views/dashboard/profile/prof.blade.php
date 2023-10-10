@extends('layouts.app')

@section('content')
<div class="container"> 
    <h1><a href="/">House Hunters' Haven</a></h1><br><br>
    
    <h2>Profile</h2>
        <div class="profile_deck">
            <img class="" src="{{  $user->image_path }}" alt=" ">
            <p>{{ $user->firstname }}</p><br><br>
            <p>Username: {{ $user->username }}</p><br><br>
            <p>Identification: {{ $user->identification }}</p><br><br>
            <p>Telephone: {{ $user->telephone }}</p><br><br>
            <p>Email: {{ $user->email }}</p><br><br>
            <p>Password: {{ $password->password }}</p><br><br>
            <div class="profile-action">
                <a href="{{ route('profile.update', $user->id) }}" class="btn btn-info"><button>Edit</button></a>
                <form action="{{ route('profile.destroy', $user->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete account?')">Delete Account</button>
                </form>
                </div>
            </div>
</div>
@endsection