@extends('layouts.admin')
@section('title', 'Tabel Content')
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
<h4 class="medium-title" style="display: inline-block;">Tabel Content</h4>
<a class="btn-round" href="{{ route('contents.create') }}" style="text-decoration: none;">+</a>
@if (session()->has('alert-success'))
	<div class="alert alert-success">{{ session()->get('alert-success') }}</div>
@elseif(session()->has('alert-danger'))
	<div class="alert alert-danger">{{ session()->get('alert-danger') }}</div>
@endif
<div class="box-table">
	<table cellspacing="0">
		<tr>
			<th>No</th>
			<th>Preview Image</th>
			<th>Action</th>
			<th>Title</th>
			<th>Slug</th>
			<th>Description</th>
			<th>Icon</th>
			<th>Image</th>
			<th>Kategori</th>
			<th>Publish</th>
			<th>Author</th>
			<th>Created at</th>
			<th>Updated at</th>
		</tr>
		@php $i = 1 @endphp
		@foreach ($contents as $content)
			<tr>
				<td>{{ $i++ }}.</td>
				<td>
					<a href="{{ url('/content_images/'.$content->image) }}" target="blank">
						<img src="{{ url('/content_images/'.$content->image) }}" alt="{{ $content->image }}" width="200">
					</a>
				</td>
				<td>
					<div class="dropdown">
						<button class="btn-clean dropBtn"><i class="fas fa-ellipsis-h"></i></button>
						<div class="dropdown-item" style="top: -100px">
							<form action="{{ route('contents.destroy', $content->id) }}" method="POST">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<a href="{{ route('contents.edit', $content->id) }}"><i class="fas fa-edit"></i> <span>Edit</span></a>
								<button type="submit"><i class="fas fa-trash-alt"></i> <span>Delete</span></button>
							</form>
						</div>
					</div>
				</td>
				<td>{{ $content->title }}</td>
				<td>{{ $content->slug }}</td>
				<td>{{ $content->description }}</td>
				<td>{{ $content->icons }}</td>
				<td>{{ $content->image }}</td>
				<td>{{ $content->category }}</td>
				<td>
					@if ($content->status < 1)
						<input type="checkbox" name="status" id="status"> <label for="status" style="display: inline-block;">Publish</label>
					@else 
						<input type="checkbox" name="status" id="status" checked="1"> <label for="status" style="display: inline-block;">Publish</label>
					@endif
				</td>
				<td>{{ $content->author }}</td>
				<td>{{ date('D M Y', strtotime($content->created_at)) }}</td>
				<td>{{ date('D M Y', strtotime($content->updated_at)) }}</td>
			</tr>
		@endforeach
	</table>
</div>
@endsection