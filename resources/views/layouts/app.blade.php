<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Netflix_icon.svg/2048px-Netflix_icon.svg.png" type="image/x-icon">
    <title>@yield('title', 'Laravel App')</title>
    @vite('resources/js/app.js')
    @yield('custom-stylesheets')
    @yield('custom-scripts-head')
</head>
<body>
    @include('partials.header')

    <main>
        @yield('main-content')
    </main>

    @include('partials.footer')
    @yield('custom-scripts-tail')
</body>
</html>