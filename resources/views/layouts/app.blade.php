<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
   @include('layouts.menu')
   @yield('content')
 
    @yield('title')
    @yield('background')
    @yield('styles')
</body>
</html>