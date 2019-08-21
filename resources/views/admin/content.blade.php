@extends('layouts.admin')
@section('title', 'Tabel Content')
@section('nav-link')
<ul>
	<li>
		<a href="{{ route('admin') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
	</li>
	<hr class="divider">
	<li>
		<a href="{{ route('content') }}" class="active"><i class="fas fa-tachometer-alt"></i> <span>Content</span></a>
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
<h4 class="medium-title">Tabel Content</h4>
<div class="box-table">
	<table cellspacing="0">
		<tr>
			<th>No</th>
			<th></th>
			<th>Title</th>
			<th>Icon</th>
			<th>Image</th>
			<th>Kategori</th>
			<th>Place</th>
			<th>Created at</th>
		</tr>
		@for ($i = 1; $i < 7; $i++)
			<tr>
				<td>{{ $i }}.</td>
				<td>
					<div class="dropdown">
						<button class="btn-clean dropBtn"><i class="fas fa-ellipsis-h"></i></button>
						<div class="dropdown-item">
							<a href=""><i class="fas fa-edit"></i> <span>Edit</span></a>
							<a href=""><i class="fas fa-trash-alt"></i> <span>Delete</span></a>
						</div>
					</div>
				</td>
				<td>Title</td>
				<td>{{ '<i class="fa fa-icon"></i>' }}</td>
				<td>Default.jpg</td>
				<td>Navbar</td>
				<td>Header</td>
				<td>23 Jun 2019</td>
			</tr>
		@endfor
	</table>
</div>
@endsection