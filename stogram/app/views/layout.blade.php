<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stogram</title>
</head>
<body>
    <div id="header">
    @if(Auth::check())
    <p>Hello, {{Auth::user()->name}}</p> <a href="{{action('AuthController@logout')}}">Log out</a>
    @else
    <p>
    <a href="{{action('AuthController@showLoginForm')}}">Log in</a> 
    or <a href="{{action('AuthController@showSignupForm')}}"> Sign Up</a>
    @endif
    </p>
    </div>
    <div id="content">
        @yield('content')
    </div>    
</body>
</html>