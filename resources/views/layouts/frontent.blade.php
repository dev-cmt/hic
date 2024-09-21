<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="horizontal" data-topbar="dark" data-sidebar-size="lg" data-sidebar="light" data-sidebar-image="none" data-preloader="disable">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @props(['title' => config('app.name', 'H&I Council')])
    <title>{{ $title }}</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{asset('public/frontend')}}/images/fav-icon/icon.png" sizes="56x56">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/bootstrap.min.css" type="text/css" media="all" />
	<!-- Jquery UI Tab css -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/jquery-ui.min.css" type="text/css" media="all" >
	<!-- Uikit  CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/uikit.min.css" type="text/css" media="all" />
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/owl.carousel.min.css" type="text/css" media="all" />
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/responsive.css" type="text/css" media="all" />
	<!-- nivo-slider CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/nivo-slider.css" type="text/css" media="all" />
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/animate.css" type="text/css" media="all" />
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/animated-text.css" type="text/css" media="all" />
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/all.min.css" type="text/css" media="all" />
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/flaticon.css" type="text/css" media="all" />
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/theme-default.css" type="text/css" media="all" />
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/meanmenu.min.css" type="text/css" media="all" />
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/owl.transitions.css" type="text/css" media="all" />
	<!-- widget CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/widget.css" type="text/css" media="all" />
	<!-- Swiper Slider CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/swiper.min.css" type="text/css" media="all">
	<!-- Slick Slider CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/css/slick.css" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend')}}/venobox/venobox.css" type="text/css" media="all" />
	<!-- Main Style CSS -->
	<link rel="stylesheet"  href="{{asset('public/frontend')}}/style.css" type="text/css" media="all" />
	<!-- Font Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<!-- modernizr js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	<!-- Loder Start -->
	<div class="loader-wrapper">
	  <div class="loader"></div>
	  <div class="loder-section left-section"></div>
	  <div class="loder-section right-section"></div>
	</div>
	<!-- Loder End -->
	@include('layouts.partial.frontend-header')

    @if (Request::is('/'))
		@include('layouts.partial.frontend-slider')
	@else
		@include('layouts.partial.frontend-banner')
	@endif

    {{ $slot }}

    @include('layouts.partial.frontend-footer')
    @include('layouts.partial.frontend-theme-settings')


    <!--==================================================-->
	<!-----start fTo-Top ----->
	<!--===================================================-->
	<button id="to-top">
		<i class="fa fa-angle-up"></i>
	</button>

	<!-- jquery js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/vendor/jquery-3.2.1.min.js"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/bootstrap.min.js"></script>
	<!-- carousel js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/owl.carousel.min.js"></script>
	<!-- counterup js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.counterup.min.js"></script>
	<!-- waypoints js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/waypoints.min.js"></script>
	<!-- appear js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.appear.js"></script>
	<!-- wow js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/wow.min.js"></script>
	<!-- imagesloaded js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/imagesloaded.pkgd.min.js"></script>
	<!-- venobox js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/venobox/venobox.js"></script>
	<!-- ajax mail js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/ajax-mail.js"></script>
	<!--  animated-text js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/animated-text.js"></script>
	<!-- venobox min js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/venobox/venobox.min.js"></script>
	<!-- isotope js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/isotope.pkgd.min.js"></script>
	<!-- jquery nivo slider pack js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.nivo.slider.pack.js"></script>
	<!-- jquery meanmenu js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.meanmenu.js"></script>
	<!-- jquery scrollup js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.scrollUp.js"></script>
	<!-- uikit js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/uikit.min.js"></script>
	<!-- Jquery UI Tab JS -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery-ui.min.js"></script>
	<!-- Swiper Slider js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/swiper.min.js"></script>
	<!-- slick Slider js-->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/slick.min.js"></script>
	<!-- theme js -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/theme.js"></script>
	<!-- jquery js -->
</body>
</html>