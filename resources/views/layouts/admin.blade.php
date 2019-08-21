<!DOCTYPE html>
<html>
<head>
	<title>Admin Lorem Ipsum - @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
</head>
<body>
<div class="admin-wrapper">
	<aside class="sidebar">
		<header>
			<div class="nav">
				<a href="{{ route('admin') }}" style="text-decoration: none;color: #fff;"><h1 class="medium-title admin-title">Admin</h1></a>
			</div>
		</header>
		<div class="profile">
			<div class="left">
				<div class="image-round">
					<img src="{{ url('/img/users/default.jpg') }}" alt="user image">
				</div>
			</div>
			<div class="right">
				<b class="name">Salung Prastyo</b>
				<p class="small-title">Online</p>
			</div>
		</div>
		<div class="sidebar-header">
			Main menu
		</div>
		@yield('nav-link')
	</aside>
	<section class="content-wrapper">
		<header>
			<div class="toggle-btn">
				<div class="toggle-wrapper">
					<div class="line"></div>
				</div>
			</div>
			<!-- <div class="userAction">
				<ul>
					<li>
						<i class="far fa-bell"></i>
					</li>
					<li>Profile</li>
				</ul>
			</div> -->
		</header>
		<div class="content">
			@yield('content')
		</div>
	</section>
</div>
<script src="{{ url('/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ url('/js/app.js') }}"></script>
</body>
</html>