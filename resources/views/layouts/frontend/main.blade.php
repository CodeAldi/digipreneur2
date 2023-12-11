{{--
Template Name: Learner
Template Author: Untree.co
Template License: https://creativecommons.org/licenses/by/3.0/
Author URI: https://untree.co/

Twitter: https://twitter.com/Untree_co
Facebook: https://web.facebook.com/Untree.co/
Pinterest: https://pinterest.com/Untree_co/ --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{ asset('landing/favicon.png') }}">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link
        href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">

    <title>{{ env('app_name') }}</title>
</head>

<body>

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    {{-- nav --}}
    @include('layouts.frontend.partials.landingmenu')
    {{-- /nav --}}

    {{-- main content --}}
    @yield('content')
    {{-- /main content --}}

    {{-- footer --}}
    @include('layouts.frontend.partials.landingfooter')
    {{-- /footer --}}

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <script src="{{ asset('landing/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('landing/js/popper.min.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('landing/js/aos.js') }}"></script>
    <script src="{{ asset('landing/js/custom.js') }}"></script>

</body>

</html>