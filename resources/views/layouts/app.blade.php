<!DOCTYPE html>
<html>
<head>
	<title>Lorem Ipsum - @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/fontawesome/css/solid.min.css') }}">
</head>
<body>
<div id="app">
	<header>
		<div class="nav">
			<div class="container">
				<div class="nav-sm-logo">
					<a href="{{ url('/') }}">LOGO</a>
				</div>
				<div class="toggle-btn">
					<div class="line"></div>
				</div>
			</div>
		</div>
		<nav>
			<div class="container">
				<div class="nav-logo">
					<a href="{{ url('/') }}">LOGO</a>
				</div>
				<ul class="nav-links">
					<li><a href="{{ route('home') }}" class="nav-link" id="navLink">Home</a></li>
					<li><a href="#" class="nav-link" id="navLink">Kategori</a></li>
					<li><a href="#pricing" class="nav-link" id="navLink">Pricing</a></li>
					<li><a href="{{ route('blog') }}" class="nav-link" id="navLink">Blog</a></li>
					@if( ! session()->has('logged_in'))
						<li><a href="{{ route('login') }}" class="nav-link" id="navLink">Log In</a></li>
						<li><a href="{{ route('register') }}" class="box-btn" id="navLink">Sign Up</a></li>
					@else
						<li><a href="{{ route('logout') }}" class="nav-link" id="navLink">Log Out</a></li>
						<li><a href="{{ route('register') }}" class="box-btn" id="navLink">My Account</a></li>
					@endif
				</ul>
			</div>
		</nav>
	</header>
	<section class="banner">
		@yield('banner')
	</section>
	<section>
		@yield('content')
	</section>
	<footer>
		<div class="container">
			<a class="medium-text" href="{{ url('') }}" style="font-weight: 700;color: #fff;line-height: 100px">LOGO</a>
			<ul class="nav-links">
				<li><a href="#" class="nav-link" id="navLink">Home</a></li>
				<li><a href="#" class="nav-link" id="navLink">Kategori</a></li>
				<li><a href="#pricing" class="nav-link" id="navLink">Pricing</a></li>
				<li><a href="#" class="nav-link" id="navLink">Blog</a></li>
			</ul>
			<hr>
			<p>Copyright 2019 - {{ date('Y') }}. All Right Reserved.By<a href="https://github.com/salungp" class="link-white">Salung</a></p>
		</div>
	</footer>
</div>
<script src="{{ url('/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ url('/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/js/app.js') }}"></script>
</body>
</html>