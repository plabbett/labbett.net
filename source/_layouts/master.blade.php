<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- 

            Hi, I'm Patrick!

            I do not enable any marketing, referrals, re-marketing, or personalized data collection on my site. 
            I use Google Analytics for  historical reporting of aggregate visitors.
            This allows me to see # of visitors my site.
            That's it. No other shenanigans. 

            Thanks for taking a look under the hood.
            Let me know (or do a pull request github:plabbett/labbett.net ) if you see improvements to make!

            Thanks,

            -Patrick

        -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-51998637-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-51998637-1', { 'anonymize_ip':true} );
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
        <meta name="description" content="The personal website of Patrick Labbett">
        <meta name="keywords" content="labbett,patrick,patrick labbett,pj,peaches,ohio,call center,call,center,answering,service,answering service">

        <meta property="og:site_name" content="labbett.net">
        <meta property="og:title" content="Patrick Labbett">
        <meta property="og:description" content="I build things for the call center industry.">
        <meta property="og:image" content="https://www.labbett.net/assets/images/master_plan.png">
        <meta property="og:url" content="https://www.labbett.net">
        <meta property="og:type" content="website">
        <meta property="og:image:alt" content="Patrick Labbett">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image:alt" content="Patrick Labbett">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/satellite.png">
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>
    
    </head>
    <body class="bg-gray-900 text-gray-200">
        @yield('body')
    </body>
</html>