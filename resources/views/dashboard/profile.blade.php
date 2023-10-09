@extends('layouts.app')

@section('styles')
    <style>
        .success{
            background-color: green;
            color: white;
            width: 80%;
            padding: 14px 28px;
            border-radius: 10px;
        }
        .img-raised {
            box-shadow: 0 5px 15px -8px rgba(0,0,0,.24), 0 8px 10px -5px rgba(0,0,0,.2);
        }
        .rounded-circle {
            border-radius: 50%!important;
        }
        .img-fluid, .img-thumbnail {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection


    @section('message')
        @if (session('success'))
            <div class="success">
                {{session('success')}}
            </div>
        @endif
    @endsection
    @section('content')
        <h1>Bio Data.</h1>
        <form action="" method="POST">
            @csrf
            @method('patch')
            <div>
                <img src="" class="img-raised rounded-circle img-fluid">
            </div>
            <div>
                <label>Username:</label><input type="text" name="username" value="">
            </div>
            <div>
            <label>Email:</label><input type="text" name="email" value="">
            </div>
            <div>
                <input type="submit" name="update" value="Update">
            </div>
        </form>
        <h1>More info.</h1>
    @endsection

