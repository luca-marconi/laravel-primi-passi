<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Admin - @yield('titolo')</title>
    </head>
    <body>
        @include('partials.header')

        <main>
            @yield('main')
        </main>

        @include('partials.footer')
    </body>
</html>
