<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="theme-color" content="#86b71e">
	    <title>Avani Eco</title>
	    <link rel="stylesheet" type="text/css" href="http://css.static.sldclc.com/jquery-ui-1.12.1.min.css" />
	    <link rel="stylesheet" type="text/css" href="http://css.static.sldclc.com/slick-1.6.0.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:400,700">
	    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1050px)" href="{{url('/')}}/assets/front/styles/main_desktop.min.css" />
	    <link rel="stylesheet" type="text/css" media="screen and (max-width: 1049px)" href="{{url('/')}}/assets/front/styles/main_mobile.min.css" />
	    @yield('header')
	</head>
	<body>
		<header>
			@include('front.layout.include.header')
		</header>
		<main>
			@yield('main')
		</main>
		<footer>
			@include('front.layout.include.newsletter')
			@include('front.layout.include.footer')
		</footer>
	    <script type="text/javascript" src="http://js.static.sldclc.com/jquery-3.1.1.min.js"></script>
	    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	    <script type="text/javascript" src="http://js.static.sldclc.com/slick-1.6.0.min.js"></script>
	    <script type="text/javascript" src="http://js.static.sldclc.com/jquery.waypoints.4.0.1.min.js"></script>
	    <script type="text/javascript" src="{{url('/')}}/assets/front/script/jquery.js"></script>
	    @yield('footer')
	</body>
</html>
