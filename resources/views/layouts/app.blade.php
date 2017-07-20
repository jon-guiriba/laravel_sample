<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Import styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fullcalendar-3.4.0/fullcalendar.css')}}" rel="stylesheet">
    <link href="{{ asset('lightbox2-master/src/css/lightbox.css')}}" rel="stylesheet">

    <!--Import scripts-->
    <script src="{{asset('fullcalendar-3.4.0/lib/jquery.min.js')}}"></script>
    <script src="{{asset('fullcalendar-3.4.0/lib/moment.min.js')}}"></script>
    <script src="{{asset('fullcalendar-3.4.0/lib/jquery-ui.min.js')}}"></script>
    <script src="{{asset('lightbox2-master/src/js/lightbox.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!--Custom Styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
    <!--Custom Scripts-->
    <script src="{{asset('js/calendar.js')}}"></script>

</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('fullcalendar-3.4.0/fullcalendar.js')}}"></script>
</body>
</html>
