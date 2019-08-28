@extends('layouts.admin')
@section('title', 'Tabel pricing')
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
	<div class="table-header">
		<b class="medium-title" style="margin-bottom: 10px;display: inline-block;">Pricing</b>
		<a class="btn-round" href="{{ route('pricings.create') }}" style="text-decoration: none;display: inline-block;">+</a>
	</div>
	@if (session()->has('alert-success'))
		<div class="alert alert-success">{{ session()->get('alert-success') }}</div>
	@elseif(session()->has('alert-danger'))
		<div class="alert alert-danger">{{ session()->get('alert-danger') }}</div>
	@endif
	<div class="box-table">
		<table cellspacing="0">
			<tr>
				<th>No</th>
				<th>Actions</th>
				<th>Type</th>
				<th>Price</th>
				<th>Mata uang</th>
				<th>Per time</th>
				<th>Link</th>
				<th>Icon</th>
				<th>Features</th>
				<th>Waktu</th>
			</tr>
			@php $i = 1 @endphp
			@foreach ($data as $key)
				<tr>
					<td>{{ $i++ }}</td>
					<td>
						<div class="dropdown">
							<button class="btn-clean dropBtn"><i class="fas fa-ellipsis-h"></i></button>
							<div class="dropdown-item" style="top: -100px;">
								<a href="{{ url('/pricing/destroy/'. $key->id) }}"><i class="fas fa-trash-alt"></i> <span>Delete</span></a>
								<a href="{{ url('/pricing/edit/'. $key->id) }}"><i class="fas fa-edit"></i> <span>Edit</span></a>
							</div>
						</div>
					</td>
					<td>{{ $key->type }}</td>
					<td>{{ $key->price }}</td>
					<td>{{ $key->mata_uang }}</td>
					<td>{{ $key->per_time }}</td>
					<td>{{ $key->link }}</td>
					<td>{{ $key->icon }}</td>
					<td>
						{{ $key->features }}
					</td>
					<td>{{ date('d M Y', strtotime($key->created_at)) }}</td>
				</tr>
			@endforeach
		</table>
	</div>
@endsection