<!DOCTYPE html>
<html>
<head>

    <title>NSAC</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

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

    @include('layouts.partials.footer')

</html>
