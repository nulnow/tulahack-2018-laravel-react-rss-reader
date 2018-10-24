<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@guest
    @if (Route::has('register'))
        <a href="{{ route('register') }}">{{ __('Register') }}</a>
    @endif
    @if (Route::has('login'))
        <a href="{{ route('login') }}">{{ __('Login') }}</a>
    @endif
@else
    {{ Auth::user()->name }}

    <form action="{{ route('logout') }}" method="POST">
        {{--@csrf--}}
        <input type="submit" value="Выйти">
    </form>
@endguest

@yield('content')

<!-- Scripts -->
<script src="js/app.js" defer></script>
</body>
</html>
