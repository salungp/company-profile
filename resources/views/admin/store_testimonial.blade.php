@extends('layouts.admin')
@section('title', 'Store testimonial')
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
		<form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<h1 class="medium-title">Tambah testimonials</h1>
			<label for="name">Name</label>
			<input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Judul content">
			@error('name')
				<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
			@enderror
			<label for="company">Perusahaan</label>
			<input type="text" id="company" name="company" class="form-control @error('company') is-invalid @enderror" placeholder="Judul content">
			@error('company')
				<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
			@enderror
			<label for="emial">Email</label>
			<input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Judul content">
			@error('email')
				<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
			@enderror
			<label for="message">Message</label>
			<textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" placeholder="Masukkan message"></textarea>
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
			<a class="btn btn-danger" href="{{ route('contents.index') }}">Cancel</a>
		</form>
	</div>
@endsection