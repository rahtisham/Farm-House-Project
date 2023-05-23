<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Favicons -->
	{{-- <link rel="shortcut icon" href="assets/images/favicon/dream-favicon.png" />
	<link rel="apple-touch-icon" href="assets/images/favicon/dream-favicon.png" /> --}}

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700|Raleway:300,400,500,600,700,800,900|Roboto:300,400,500,700" rel="stylesheet">

	<!-- =>> All Stylesheet <<= -->
	<!-- Bootstrap v3.3.6 Core CSS-->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<!-- Owl Carousel 2 -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.css') }}" />
	<!-- jquery-ui-1.12.0 CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui-css/jquery-ui-1.12.0.min.css') }}" />
	<!-- Noice Slider (Price Range) -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.nouislider.min.css') }}" />
	<!-- Animate 3.5.1 CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}" />
	<!--  Font Awesome 4.6.3 Icons -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" />
	<!-- Flat Icons -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/flaticons/font/flaticon.css') }}" />

	<!-- Custom/Main Stylesheets -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/header-menu-responsive.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugin and others plugins) -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery-2.2.3.min.js') }}"></script>
	<!-- jquery-ui-1.12.0 -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery-ui/jquery-ui-1.12.0.min.js') }}"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Bootstrap v3.3.6 -->
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- Owl Carousel 2 -->
	<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<!-- Owl Carousel v1.3.2 -->
	<script type="text/javascript" src="{{ asset('assets/js/owl-1.3.2/owl.carousel.min.js') }}"></script>
	<!-- WOW - v1.1.3 -->
	<script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>
	<!-- Typer Js -->
	<script type="text/javascript" src="{{ asset('assets/js/typed.min.js') }}"></script>
	<!-- Noice Slider (Price Range) -->
	<script src="{{ asset('assets/js/jquery.nouislider.min.js') }}"></script>
	<!-- jQuery Mobile Library -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.mobile.custom.min.js') }}"></script>
	<!-- Conatact Map -->
	<script type="text/javascript" src="{{ asset('assets/js/map-script.js') }}"></script>

	<!-- Custom/Main Script here -->
	<script type="text/javascript" src="{{ asset('assets/js/menu.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>
