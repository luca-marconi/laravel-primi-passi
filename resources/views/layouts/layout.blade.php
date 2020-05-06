<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://kit.fontawesome.com/0deee8bd3c.js" crossorigin="anonymous"></script>
        <title>@yield('titolo')</title>
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('mainContent')
        </main>
        @include('partials.footer')
        @yield('script')
    </body>
</html>
