@extends('layouts.admin')
@section('title', 'Tabel users')
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
		<a href="{{ route('users') }}" class="active"><i class="far fa-user"></i> <span>Users</span></a>
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
<h4 class="medium-title">Tabel User</h4>
<div class="box-table">
	<table cellspacing="0">
		<tr>
			<th>No</th>
			<th></th>
			<th>Nama</th>
			<th>Email</th>
			<th>Password</th>
			<th>Created at</th>
		</tr>
		@php $i = 1 @endphp
		@foreach ($users as $user)
			<tr>
				<td>{{ $i++ }}.</td>
				<td>
					<div class="dropdown">
						<button class="btn-clean dropBtn"><i class="fas fa-ellipsis-h"></i></button>
						<div class="dropdown-item" style="top: -90px;">
							<a href="{{ '' }}"><i class="fas fa-edit"></i> <span>Edit</span></a>
							<a href="{{ '' }}"><i class="fas fa-trash-alt"></i> <span>Delete</span></a>
						</div>
					</div>
				</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->password }}</td>
				<td>{{ $user->created_at }}</td>
			</tr>
		@endforeach
	</table>
</div>
@endsection