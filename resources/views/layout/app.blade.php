<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | Sky</title>
    <!-- Favicon -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700">
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- General CSS Files -->
    <link id="pagestyle" href="{{asset('assets/css/material-kit-pro.min.css?v=3.0.1')}}" rel="stylesheet" />
    @yield('vendor_css')
    <!-- Vendor Files-->
    <link href="{{asset('custom/app.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/toastr/toastr.css')}}" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    @yield('plugin_css')
    <script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src = "{{asset('assets/js/core/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/prism.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/highlight.min.js')}}"></script>
    <script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>

</head>
<body>
    @include('layout.header')
    @yield('content')
    @include ('layout.footer')
    <!-- JS files -->
    <script src="{{asset('/assets/js/plugins/choices.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/js/plugins/flatpickr.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/js/material-kit.min.js?v=3.0.1')}}" type="text/javascript"></script>
    @yield('vendor_js')
    <script type = "text/javascript">
        var PUSHER_KEY = "a4bed7e702d997a0f62e";
        var PUSHER_CLUSTER = "ap2";
        $.ajaxSetup({
            headers:
                {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

        });

    </script>
    @yield('plugin_js')
    @yield('page_js')
</body>
</html>
