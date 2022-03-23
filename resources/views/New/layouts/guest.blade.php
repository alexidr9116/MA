<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:locale" content="ja_JP">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:card" content="">
    <meta property="twitter:url" content="" />
    <title>@yield('title')Sky</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{asset('/assets/font/fonts.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/assets/js/app.js')}}"> 
        @yield('vendor-css')
        
    </head>
    <body class="wrapper">
        @yield('vendor-js')
        @include('layouts.header')
        <main>
                {{ $slot }}
            </main>
        @include('layouts.footer')
        @yield('starkiter-js')
    </body>
</html>