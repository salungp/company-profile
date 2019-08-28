@php $user = DB::table('users')->where('id', session()->has('user_id'))->first(); @endphp
<!DOCTYPE html>
<html>
<head>
	<title>Admin Lorem Ipsum - @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
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
					<img src="{{ url('/users/'.$user->profile_image) }}" alt="user image">
				</div>
			</div>
			<div class="right">
				<b class="name">{{ $user->name }}</b>
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
			<div class="userAction">
				<div class="dropdown-header">
					<button class="btn-clean" id="btnToggle"><i class="far fa-envelope"></i></button>
					<div class="dropdown-header-item">
						<a href="" class="nav-link">Your message is not found!</a>
						<a href="" class="nav-link">Your message is not found!</a>
						<a href="" class="nav-link">Your message is not found!</a>
					</div>
				</div>
				<div class="vertical-divider"></div>
				<div class="account">
					<a href="{{ route('profile.index') }}">{{ substr($user->name, 0, 1) }}</a>
					<span class="tooltip">{{ $user->name }}</span>
				</div>
				<a href="{{ route('logout') }}" style="display: inline-block;line-height: 52px;color: #333;text-decoration: none;padding: 0 12px;">Logout</a>
			</div>
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