@extends('layouts.admin')
@section('title', 'Store content')
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
		<a href="{{ route('testimonial.index') }}"><i class="fas fa-cog"></i> <span>Testimonials</span></a>
	</li>
	<hr class="divider">
	<li>
		<a href="{{ route('pricing') }}" class="active"><i class="fas fa-cog"></i> <span>Pricing</span></a>
	</li>
	<hr class="divider">
</ul>
@endsection
@section('content')
	<div class="box">
		<form action="{{ route('pricings.store') }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<h1 class="medium-title">Input pricing data</h1>
			<p>Masukkan pricing untuk ditampilkan di halaman website.</p>
			<label for="type">Type</label>
			<select id="type" class="form-control" name="type">
				<option>small</option>
				<option>medium</option>
				<option>big</option>
			</select>
			<label for="price">Harga</label>
			<input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Masukkan harga">
			@error('price')
				<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
			@enderror
			<label for="mata_uang">Mata uang</label>
			<select name="mata_uang" id="mata_uang" class="form-control" placeholder="Masukkan mata uang">
				<option value="$">$</option>
				<option value="IDR">IDR</option>
				<option value="euro">euro</option>
			</select>
			<label for="per_time">Per time</label>
			<select name="per_time" id="per_time" class="form-control">
				<option>/second</option>
				<option>/minute</option>
				<option>/hour</option>
				<option>/day</option>
				<option>/month</option>
				<option>/year</option>
			</select>
			<label for="features">Features</label>
			<textarea name="features" class="form-control" id="features"></textarea>
			<label for="link">Link</label>
			<input type="text" name="link" id="link" class="form-control @error('link') is-invalid @enderror">
			@error('link')
				<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
			@enderror
			<label for="icon">Icons</label>
			<textarea name="icon" id="icon" class="form-control @error('icon') is-invalid @enderror"></textarea>
			@error('icon')
				<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
			@enderror
			<button class="btn btn-success" type="submit">Simpan</button>
			<a class="btn btn-danger" href="{{ route('pricing') }}">Cancel</a>
		</form>
	</div>
@endsection