<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ori') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('/js/main.js') }}"></script> 

<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">

    <!-- Styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="node_modules/sweetalert2/dist/sweetalert2.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

 <script src="https://code.jquery.com/jquery-3.2.1min.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link href="{{ asset('css/invoice.css') }}" rel="stylesheet">

     <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/projects.css') }}" rel="stylesheet">
    <link href="{{ asset('css/client.css') }}" rel="stylesheet">
        <link href="{{ asset('css/calcTimer.css') }}" rel="stylesheet">
        <link href="{{ asset('css/tips.css') }}" rel="stylesheet">




</head>
<body>

    <div id="app">
    
    @include('nav')
    @yield('section')

    </div>


    <script src="js/sweetalert.min.js"></script>
    <script src="{{ asset('/js/timer.js') }}"></script> 
        <script src="{{ asset('/js/back.js') }}"></script> 
         <script src="{{ asset('/js/back.js') }}"></script>

     @include('sweet::alert')
<script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <script type="js/main.js"></script>
    <script src="js/main.js"></script> 
</body>
</html>
