<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::to('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/css/dashboard.css') }}">
    @yield('styles')
</head>
<body>
@include('partials.header')
@yield('content')

<script type="text/javascript" src="{{ URL::to('public/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('public/js/bootstrap.min.js') }}"></script>
@yield('scripts')
</body>
</html>