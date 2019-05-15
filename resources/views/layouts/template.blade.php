<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    @yield('css')
    <title>@yield('title') - UpToFiles</title>
</head>
<body>
    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/materialize.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    @yield('script')
    @include('flashy::message')
</body>
</html>
