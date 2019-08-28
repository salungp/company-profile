@extends('layouts.admin')
@section('title', 'Edit content')
@section('nav-link')
<ul>
	<li>
		<a href="{{ route('admin') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
	</li>
	<hr class="divider">
	<li>
		<a href="{{ route('contents.index') }}" class="active"><i class="fas fa-tachometer-alt"></i> <span>Content</span></a>
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
	<div class="box">
		<form action="{{ route('contents.update', $content->id) }}" method="POST" enctype="multipart/form-data">
			@method('PUT')
			{{ csrf_field() }}
			<h1 class="medium-title">Update content</h1>
			<label for="title">Judul</label>
			<input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Judul content" value="{{ $content->title }}">
			@error('title')
				<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
			@enderror
			<label for="description">Description</label>
			<textarea name="description" class="form-control @error('title') is-invalid @enderror" id="description" placeholder="Masukkan description">{{ $content->description }}"</textarea>
			@error('description')
				<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
			@enderror
			<label for="icon">Icon</label>
			<textarea name="icons" id="icon" class="form-control" placeholder="Masukkan icon">{{ $content->icons }}"</textarea>
			<label for="image">Gambar</label>
			<input type="file" name="image" class="form-control" id="image">
			<label for="link">Link</label>
			<input type="text" name="link" id="link" class="form-control" value="{{ $content->link }}">
			<label for="category">Kategori</label>
			<select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
				<option>navbar</option>
				<option>banner</option>
				<option>footer</option>
				<option>pricing</option>
				<option>testimonial</option>
				<option>section</option>
				<option>diskon</option>
			</select>
			@error('category')
				<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
			@enderror
			<button class="btn btn-success" type="submit">Simpan</button>
			<a class="btn btn-danger" href="{{ route('contents.index') }}">Cancel</a>
		</form>
	</div>
@endsection