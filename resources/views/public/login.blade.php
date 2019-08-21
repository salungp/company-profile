@extends('layouts.auth')
@section('title', 'Login')
@section('form')
	<form action="{{ route('_login') }}" method="POST">
		{{ csrf_field() }}
		<h1 class="medium-title" style="text-align: center;">Login</h1>
		@if (session()->has('alert-success'))
			<div class="alert alert-success">{{ session()->get('alert-success') }}</div>
		@elseif(session()->has('alert-danger'))
			<div class="alert alert-danger">{{ session()->get('alert-danger') }}</div>
		@endif
		<label for="email">Email</label>
		<input type="email" name="email" placeholder="Your email" id="email" class="form-control @error('email') is-invalid @enderror">
		@error('email')
			<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
		@enderror
		<label for="pass">Password</label>
		<input type="password" id="pass" name="password" placeholder="Your password" class="form-control @error('password') is-invalid @enderror">
		@error('password')
			<div class="small-title" style="color: #dc3545;">{{ $message }}</div>
		@enderror
		<button type="submit" class="auth-btn">Sign In</button>
		<p>Don't have an account? <a href="{{ route('register') }}" style="text-decoration: none;color: rgba(55, 160, 244, 1);">Sign Up</a></p>
	</form>
@endsection