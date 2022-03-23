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
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title')Sky</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{asset('/assets/font/fonts.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />

    <link rel="stylesheet" href="{{asset('/assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    @yield('vendor-css')
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/js/chartset.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/js/ga_graph.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/js/functions.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/js/radar_chart.js')}}"></script>
    @yield('vendor-js') 
        
    </head>
    <body class="wrapper">
       
        @include('layouts.header')
        @yield('body')
        @include('layouts.footer')
        <a href="javascript:;" class="back_to_top">
            <picture class="back_to_top_img">
                <source media="(min-width:769px)" srcset="{{asset('/assets/img/common/back_to_top.svg')}}">
                <source media="(max-width:768px)" srcset="{{asset('/assets/img/common/back_to_top_sp.svg')}}">
                <img src="{{asset('/assets/img/common/back_to_top.svg')}}" alt="">
            </picture>
            </a>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

        <script src="https://rakkoma.com/js/projectDetailChartRender.js"></script>

        <script type="text/javascript" src="{{asset('/assets/js/common.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                jQuery.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
            });
        </script>
        @yield('startkit-js')
    </body>
</html>