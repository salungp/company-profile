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
					<li><a href="#kategori" class="nav-link" id="navLink">Kategori</a></li>
					<li><a href="#pricing" class="nav-link" id="navLink">Pricing</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<section>
		@yield('content')
	</section>
	<footer>
		<div class="container">
			<div class="contact" id="contact">
				<form action="{{ route('kontak.store') }}" method="POST">
					{{ csrf_field() }}
					<h1 class="medium-text">{{ $kontak->title }}</h1>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<input type="text" name="name" placeholder="Your name" class="form-control @error('name') input-error @enderror" required>
							@error('name')
								<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
							@enderror
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<input type="email" name="email" placeholder="Your email" class="form-control @error('email') input-error @enderror" required>
							@error('email')
								<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
							@enderror
						</div>
						<div class="col-md-12">
							<input type="text" name="subjek" class="form-control @error('subjek') input-error @enderror" placeholder="Subject">
							@error('subjek')
								<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
							@enderror
						</div>
						<div class="col-md-12">
							<textarea name="message" placeholder="Message" class="form-control form-control @error('message') input-error @enderror" required>
							</textarea>
							@error('message')
								<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
							@enderror
							<button class="btn btn-success">Send</button>
						</div>
					</div>
				</form>
			</div>
			<a class="medium-text" href="{{ url('') }}" style="font-weight: 700;color: #fff;line-height: 100px">LOGO</a>
			<ul class="nav-links">
				<li><a href="{{ route('home') }}" class="nav-link" id="navLink">Home</a></li>
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
