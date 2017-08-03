<!DOCTYPE html>
<html>
<head>

    <title>NSAC</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/nsac.css') }}">

</head>
<body {{ Auth::check() ?: 'login' }}>

    @if(Auth::check())
        @include('layouts.partials.navbar')
    @else
        @include('auth.login')
    @endif

    @include('layouts.partials.header')

    <div class="main">
        <div class="well">
            @yield('content')
        </div>
    </div>
    </body>
    
    <!-- Javascript -->
    <script src="{{ asset('js/nsac.js') }}"></script>

</html>
