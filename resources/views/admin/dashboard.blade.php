@extends('layouts.admin')
@section('title', 'Dahsboard')
@section('nav-link')
<ul>
	<li>
		<a href="{{ route('admin') }}" class="active"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
	</li>
	<hr class="divider">
	<li>
		<a href="{{ route('contents.index') }}"><i class="fas fa-tachometer-alt"></i> <span>Content</span></a>
	</li>
	<hr class="divider">
	<li>
		<a href="{{ route('users') }}"><i class="far fa-user"></i> <span>Users</span></a>
	</li>
	<hr class="divider">
	<li>
		<a href="{{ route('contact') }}"><i class="fas fa-id-card"></i> <span>Contact</span></a>
	</li>
	<hr class="divider">
	<li>
		<a href="{{ route('setting') }}"><i class="fas fa-cog"></i> <span>Setting</span></a>
	</li>
	<hr class="divider">
	<li>
		<a href="{{ route('visitor') }}"><i class="fas fa-cog"></i> <span>Visitor</span></a>
	</li>
	<hr class="divider">
	<li>
		<a href="{{ route('testimonial.index') }}"><i class="fas fa-cog"></i> <span>Testimonials</span></a>
	</li>
	<hr class="divider">
	<li>
		<a href="{{ route('pricing') }}"><i class="fas fa-cog"></i> <span>Pricing</span></a>
	</li>
	<hr class="divider">
</ul>
@endsection
@section('content')
	<div class="row">
		<div class="col-4">
			<div class="info" style="background: #1abc9c;border-bottom: 7px solid #16a085;">
				<p>User</p>
				<h1 class="big-title">{{ $users }}</h1>
				<i class="far fa-user"></i>
				<a href="{{ route('users') }}">See Result</a>
			</div>
		</div>
		<div class="col-4">
			<div class="info" style="background: #e74c3c;border-bottom: 7px solid #d35400;">
				<p>Visitor</p>
				<h1 class="big-title">{{ $visitor }}</h1>
				<i class="fas fa-chart-area"></i>
				<a href="{{ route('visitor') }}">See Result</a>
			</div>
		</div>
		<div class="col-4">
			<div class="info" style="background: #e67e22;border-bottom: 7px solid #d35400;">
				<p>Contact</p>
				<h1 class="big-title">{{ $kontak }}</h1>
				<i class="far fa-user"></i>
				<a href="{{ route('contact') }}">See Result</a>
			</div>
		</div>
	</div>
@endsection