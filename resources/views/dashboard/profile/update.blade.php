@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Update Profile</h1>
        <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="form-group">
                <label for="image">Profile Picture:</label>
                <input type="file" name="image" class="form-control">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="first_name">Firstname:</label>
                <input type="text" name="first_name" class="form-control" value="{{ $user->firstname }}">
                @error('firstname')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="identification">ID no/ Passport:</label>
                <input type="number" name="identification" class="form-control" value="{{ $user->identification }}">
                @error('identification')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="user_name">Username:</label>
                <input type="text" name="user_name" class="form-control" value="{{ $user->username }}">
                @error('username')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="number" name="telephone" class="form-control" value="{{ $user->telephone }}" disabled>
                @error('telephone')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled>
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" value="{{ $user->password }}" disabled>
                @error('password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
</div>
@endsection