<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/satellite.png">
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>
        

        
    </head>
    <body class="bg-gray-900 text-gray-200">
        @yield('body')
    </body>
</html>