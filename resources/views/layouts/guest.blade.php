<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" content="text/html; charset=windows-1254">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Login') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
{{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets')}}/admin/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/metisMenu.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/typography.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/default-css.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/styles.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="{{asset('assets')}}/admin/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body >
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <!-- jquery latest version -->
        <script src="{{asset('assets')}}/admin/assets/js/vendor/jquery-2.2.4.min.js"></script>
        <!-- bootstrap 4 js -->
        <script src="{{asset('assets')}}/admin/assets/js/popper.min.js"></script>
        <script src="{{asset('assets')}}/admin/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('assets')}}/admin/assets/js/owl.carousel.min.js"></script>
        <script src="{{asset('assets')}}/admin/assets/js/metisMenu.min.js"></script>
        <script src="{{asset('assets')}}/admin/assets/js/jquery.slimscroll.min.js"></script>
        <script src="{{asset('assets')}}/admin/assets/js/jquery.slicknav.min.js"></script>

        <!-- others plugins -->
        <script src="{{asset('assets')}}/admin/assets/js/plugins.js"></script>
        <script src="{{asset('assets')}}/admin/assets/js/scripts.js"></script>
    </body>
</html>
