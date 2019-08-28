@extends('layouts.admin')
@section('title', 'Dahsboard')
@section('nav-link')
<ul>
	<li>
		<a href="{{ route('admin') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
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
		<a href="{{ route('contact') }}" class="active"><i class="fas fa-id-card"></i> <span>Contact</span></a>
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
			<div class="box">
				<div class="profile">
					<div class="all-center">
						<img src="{{ url('/users/'.$user->profile_image) }}" class="image-round">
					</div>
					<div class="section">
						<p class="bold">{{ $user->name }}</p>
					</div>
					<div class="section">
						<p>{{ $user->email }}</p>
					</div>
					<a href="" style="text-decoration: none;color: blue;">Reset password?</a>
				</div>
			</div>
		</div>
		<div class="col-8">
			<div class="box">
				<h1>Edit your profile</h1>
				@if (session()->has('alert-success'))
					<div class="alert alert-success">{{ session()->get('alert-success') }}</div>
				@elseif(session()->has('alert-danger'))
					<div class="alert alert-danger">{{ session()->get('alert-danger') }}</div>
				@endif
				<form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
					@method('PUT')
					{{ csrf_field() }}
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Your name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}">
					@error('name')
						<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
					@enderror
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Your email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}">
					@error('email')
						<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
					@enderror
					<label for="image">Your profile image</label>
					<input type="file" name="image" class="form-control">
					<button type="submit" class="btn btn-success">Simpan</button>
				</form>
			</div>
		</div>
	</div>
@endsection