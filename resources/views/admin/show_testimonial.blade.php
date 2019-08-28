@extends('layouts.admin')
@section('title', 'Edit content testimonial')
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
		<a href="{{ route('testimonial.index') }}" class="active"><i class="fas fa-cog"></i> <span>Testimonials</span></a>
	</li>
	<hr class="divider">
	<li>
		<a href="{{ route('pricing') }}"><i class="fas fa-cog"></i> <span>Pricing</span></a>
	</li>
	<hr class="divider">
</ul>
@endsection
@section('content')
	<div class="box">
		<form action="{{ route('testimonial.update', [$testimonial->id]) }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			@method('PUT')
			<h1 class="medium-title">Edit profile testimonials</h1>
			@if (session()->has('alert-success'))
				<div class="alert alert-success">{{ session()->get('alert-success') }}</div>
			@elseif(session()->has('alert-danger'))
				<div class="alert alert-danger">{{ session()->get('alert-danger') }}</div>
			@endif
			<label for="name">Name</label>
			<input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Judul content" value="{{ $testimonial->name }}">
			@error('name')
				<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
			@enderror
			<label for="company">Perusahaan</label>
			<input type="text" id="company" name="company" class="form-control @error('company') is-invalid @enderror" placeholder="Judul content" value="{{ $testimonial->company }}">
			@error('company')
				<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
			@enderror
			<label for="emial">Email</label>
			<input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Judul content" value="{{ $testimonial->email }}">
			@error('email')
				<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
			@enderror
			<label for="message">Message</label>
			<textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" placeholder="Masukkan message">{{ $testimonial->message }}</textarea>
			@error('message')
				<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
			@enderror
			<label for="image">Profile</label>
			<input type="file" name="image" class="form-control" id="image">
			<label for="rate">Rating (max 5)</label>
			<select name="rate" id="rate" class="form-control">
				@for ($i = 1; $i <= 5; $i++)
					<option>{{ $i }}</option>
				@endfor
			</select>
			<button class="btn btn-success" type="submit">Simpan</button>
			<a class="btn btn-danger" href="{{ route('testimonial.index') }}">Cancel</a>
		</form>
	</div>
@endsection