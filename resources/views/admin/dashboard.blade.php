@extends('layouts.admin')
@section('title', 'Dahsboard')
@section('nav-link')
<ul>
	<li>
		<a href="{{ route('admin') }}" class="active"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
	</li>
	<hr class="divider">
	<li>
		<a href="{{ route('content') }}"><i class="fas fa-tachometer-alt"></i> <span>Content</span></a>
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
</ul>
@endsection
@section('content')
	<div class="row">
		<div class="col-4">
			<div class="info" style="background: #1abc9c;border-bottom: 7px solid #16a085;">
				<p>User Registration</p>
				<h1 class="big-title">2390</h1>
				<i class="far fa-user"></i>
				<a href="{{ route('users') }}">See Result</a>
			</div>
		</div>
		<div class="col-4">
			<div class="info" style="background: #e74c3c;border-bottom: 7px solid #d35400;">
				<p>Visitor</p>
				<h1 class="big-title">100000</h1>
				<i class="fas fa-chart-area"></i>
				<a href="{{ route('contact') }}">See Result</a>
			</div>
		</div>
		<div class="col-4">
			<div class="info" style="background: #e67e22;border-bottom: 7px solid #d35400;">
				<p>Contact</p>
				<h1 class="big-title">2909</h1>
				<i class="far fa-user"></i>
				<a href="{{ route('contact') }}">See Result</a>
			</div>
		</div>
	</div>
	<div class="table-header">
		<b class="medium-title" style="margin-bottom: 10px;display: block;">Contact</b>
	</div>
	<div class="box-table">
		<table cellspacing="0">
			<tr>
				<th>No</th>
				<th></th>
				<th>Nama</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Pesan</th>
				<th>Waktu</th>
			</tr>
			@for ($i = 1; $i < 9; $i++)
				<tr>
					<td>{{ $i }}</td>
					<td>
						<div class="dropdown">
							<button class="btn-clean dropBtn"><i class="fas fa-ellipsis-h"></i></button>
							<div class="dropdown-item">
								<a href=""><i class="fas fa-edit"></i> <span>Edit</span></a>
								<a href=""><i class="fas fa-trash-alt"></i> <span>Delete</span></a>
							</div>
						</div>
					</td>
					<td>Salung Prastyo</td>
					<td>salungprastyo@gmail.com</td>
					<td>Subject</td>
					<td>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
					</td>
					<td>23 July 2019</td>
				</tr>
			@endfor
		</table>
	</div>
@endsection