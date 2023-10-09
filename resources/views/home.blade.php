<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Hunters' Haven</title>
</head>
<body>
@extends('layouts.app')
 
@section('title')
 {{--}}   <div style="font-size: 50px; margin: 0; padding: 0; text-align: center; position: absolute; top: 40%; left: 50%; transform: translateX(-50%);">
        <h3><b>House Hunters' Haven</b></h3>
    </div> --}}
@endsection

@section('background')
    <div>
        <img src="{{URL('images/background.jpg')}}" alt="">
    </div>
@endsection 
</html>