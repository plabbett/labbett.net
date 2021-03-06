<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
        <meta name="description" content="The personal website of Patrick Labbett">
        <meta name="keywords" content="notifius,call theory,calltheory,hourlycheck,wctp-gateway,tas ninja,labbett,patrick,patrick labbett,pj,peaches,ohio,call center,call,center,answering,service,answering service">

        <meta property="og:site_name" content="labbett.net">
        <meta property="og:title" content="Patrick Labbett">
        <meta property="og:description" content="I build things for the call center industry.">
        <meta property="og:image" content="https://www.labbett.net/assets/images/voice.webp">
        <meta property="og:url" content="https://www.labbett.net">
        <meta property="og:type" content="website">
        <meta property="og:image:alt" content="Patrick Labbett">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image:alt" content="Patrick Labbett">

        <title>@yield('title')</title>

        <link rel="stylesheet" media="all" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="icon" type="image/png" href="/assets/images/satellite.png">
        <script src="{{ mix('js/main.js', 'assets/build') }}" async defer></script>
    
    </head>
    <body class="bg-gray-900 text-gray-200 min-h-screen">
        @yield('body')
    </body>
</html>