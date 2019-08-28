@extends('layouts.auth')
@section('title', 'Register')
@section('form')
	<form action="{{ route('_register') }}" method="POST">
		{{ csrf_field() }}
		<h1 class="medium-title" style="text-align: center;">Register</h1>
		@if (session()->has('alert-success'))
			<div class="alert alert-success">{{ session()->get('alert-success') }}</div>
		@elseif(session()->has('alert-danger'))
			<div class="alert alert-danger">{{ session()->get('alert-danger') }}</div>
		@endif
		<div class="dbl-form" style="display: flex;margin: 0 -15px">
			<div class="form-wrapper">
				<label for="name">Name</label>
				<input type="text" name="name" placeholder="Your name" id="name" class="form-control @error('name') is-invalid @enderror">
				@error('name')
					<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-wrapper">
				<label for="email">Email</label>
				<input type="email" name="email" placeholder="Your email" id="email" class="form-control @error('name') is-invalid @enderror">
				@error('name')
					<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
				@enderror
			</div>
		</div>
		<label for="pass">Password</label>
		<input type="password" id="pass" name="password" placeholder="Your password" class="form-control @error('name') is-invalid @enderror">
		@error('name')
			<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
		@enderror
		<button type="submit" class="auth-btn">Sign Up</button>
		<p>Do you have an account? <a href="{{ route('login') }}" style="text-decoration: none;color: rgba(55, 160, 244, 1);">Login</a></p>
	</form>
@endsection