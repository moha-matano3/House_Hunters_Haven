<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</head>
<body>
    @section('message')
        @if (session('success'))
            <div class="success">
                {{session('success')}}
            </div>
        @endif
    @endsection
    @section('dashboard-content')
        <h1>Bio Data.</h1>
        <form action="" method="POST">
            @csrf
            @method('patch')
            <div>
                <img src="" class="img-raised rounded-circle img-fluid">
            </div>
            <div>
                <input type="text" name="username" value="{{$user->username}}">
            </div>
            <div>
                <input type="text" name="email" value="{{$user->email}}">
            </div>
            <div>
                <input type="submit" name="update" value="Update">
            </div>
        </form>
        <h1>More info.</h1>
    @endsection
</body>
</html>