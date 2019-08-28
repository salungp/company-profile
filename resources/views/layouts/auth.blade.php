<!DOCTYPE html>
<html>
<head>
	<title>Lorem Ipsum - @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
</head>
<body>
<div class="auth-wrapper">
	<div class="container">
		<div class="auth-box">
			<div class="left" style="background: url({{ url('/img/assets/ipad-820272_1280.jpg') }}) center center no-repeat;background-size: cover;">
				
			</div>
			<div class="right">
				@yield('form')
			</div>
		</div>
	</div>
</div>
<script src="{{ url('/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ url('/js/app.js') }}"></script>
</body>
</html>