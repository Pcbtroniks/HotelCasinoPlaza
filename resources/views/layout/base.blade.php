<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('front.shared.meta')

        <title>{{ config('app.name', 'Hotel Casino Plaza') }}</title>

        @vite('resources/css/app.css')
        @yield('css')
    </head>
    <body class="antialiased">

        @include('front.shared.sidebar')

        @include('front.shared.header')

        @yield('content')

        @include('front.shared.footer')

        @vite('resources/js/app.js')
        @yield('js')
    </body>
</html>
