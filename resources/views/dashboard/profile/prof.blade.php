@extends('layouts.app')
<style>
    .create_form {
        position: absolute;
        top: 60%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0,0,0,.1);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 10px;
    }
</style>
@section('content')
<div class="create_form">   
    <h1>Profile</h1><br>
        <div class="profile_deck">
            <img src="{{ asset('storage/'. $user->user_img) }}" alt="profile_pic" width="50%" height="20%"><br><br>
            <p>{{ $user->firstname }}</p><br>
            <p>Username: {{ $user->username }}</p><br>
            <p>Identification: {{ $user->identification }}</p><br>
            <p>Telephone: {{ $user->telephone }}</p><br>
            <p>Email: {{ $user->email }}</p><br>
           
            <div class="profile-action">
                <a href="{{ route('dashboard.profile.edit', $user->id) }}" class="btn btn-info"><button>Edit</button></a>
                <form action="{{ route('dashboard.profile.destroy', $user->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="submit" onclick="return confirm('Are you sure you want to delete account?')">Delete Account</button>
                </form>
                </div>
            </div>
</div>
@endsection