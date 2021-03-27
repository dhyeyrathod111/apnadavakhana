<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/assets/admin/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <script src="{{ asset('public/assets/admin/js/jquery-3.3.1.min.js ') }}"></script>
    <script src="{{ asset('public/assets/admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('public/assets/admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('public/assets/admin/js/main.js') }}" defer></script>
    <script src="{{ asset('public/assets/admin/js/plugins/pace.min.js') }}" defer></script>

    @include('include.extjs')

    @yield('pageScript')
   
</body>
</html>
