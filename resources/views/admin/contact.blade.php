@extends('layouts.admin')
@section('title', 'Dahsboard')
@section('nav-link')
<ul>
	<li>
		<a href="{{ route('admin') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
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
		<a href="{{ route('contact') }}" class="active"><i class="fas fa-id-card"></i> <span>Contact</span></a>
	</li>
	<hr class="divider">
	<li>
		<a href="{{ route('setting') }}"><i class="fas fa-cog"></i> <span>Setting</span></a>
	</li>
	<hr class="divider">
</ul>
@endsection
@section('content')
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