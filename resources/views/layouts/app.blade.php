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
    <link href="{{ asset('jquery-ui-1.12.1.custom/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{ asset('jquery-ui-1.12.1.custom/jquery-ui.structure.css')}}" rel="stylesheet">
    <link href="{{ asset('jquery-ui-1.12.1.custom/jquery-ui.theme.css')}}" rel="stylesheet">

    <!--Custom styles-->
    <link href="{{ asset('fullcalendar-3.4.0/fullcalendar-custom.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
    <!--Import scripts-->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('fullcalendar-3.4.0/lib/moment.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!--Custom scripts-->
    <script src="{{asset('js/calendar.js')}}"></script>

</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Late loading Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('fullcalendar-3.4.0/fullcalendar.js')}}"></script>
    <script src="{{asset('jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
</body>
</html>
