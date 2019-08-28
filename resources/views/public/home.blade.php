@extends('layouts.app')
@section('title', 'Deskripsi website')
<section class="banner" style="background: url({{ url('/content_images/'.$banner->image) }}) center center no-repeat;background-size: cover;background-attachment: fixed;">
	<div class="container">
		<div class="content">
			<h1 class="big-text">{{ $banner->title }}</h1>
			<p>{{ $banner->description }}</p>
			<div class="center">
				<div class="links">
					<a href="#kategori" class="box-btn">Learn More</a>
					<a href="#contact" class="box-red">Get Started</a>
				</div>
			</div>
		</div>
	</div>
</section>
@section('content')
	<section class="kategori" id="kategori">
		<div class="container">
			<div class="row">
				@foreach ($section as $key)
					<div class="col-sm-6 col-xs-6 col-md-4">
						<div class="box-item">
							<div class="icon-wrapper">
								<div class="icon">
									<i class="{{ $key->icons }}"></i>
								</div>
							</div>
							<h3 class="medium-text">{{ $key->title }}</h3>
							<p>{{ $key->description }}</p>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	<section class="paket">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<b style="color: #666;text-transform: uppercase;">{{ $diskon->category }}</b>
					<h3 class="big-text">{{ $diskon->title }}</h3>
					<p class="mb-4">{{ $diskon->description }}</p>
					<a href="{{ $diskon->link }}" class="box-btn">Get started</a>
				</div>
				<div class="col-md-6" style="background: url({{ url('/content_images/'.$diskon->image) }}) center center no-repeat;background-size: cover;">
				</div>
			</div>
		</div>
	</section>
	<section class="pricing" id="pricing">
		<div class="container">
			<h1 class="title" style="font-weight: bold;">Pricing</h1>
			<div class="row">
				@foreach ($pricing as $key)
					<div class="col-sm-6 col-xs-6 col-md-4">
						<div class="box">
							<h3 class="medium-text">{{ ucfirst($key->type) }}</h3>
							<h1 class="price" style="color: 26de81">
								<span class="icon-text">{{ $key->mata_uang }}</span>
								<span class="text">{{ $key->price }}</span>
								<span class="date">{{ strtoupper($key->per_time) }}</span>
							</h1>
							@php $features = explode(',', $key->features) @endphp
							<ul>
								@foreach ($features as $k => $v)
									<li>{{ $v }}</li>
								@endforeach
							</ul>
							<a href="" class="btnFull" style="background: #ccc">Sign up now</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	@if ( ! empty($testimonial))
		<section class="testimonial">
			<div class="container">
				<h1 class="title" style="max-width: 370px;line-height: 40px">{{ $testimonial->title }}</h1>
				<div class="container">
				@php $icons = explode(',', $testimonial->icons) @endphp
				</div>
				<a class="btn-round" style="left: 0" href="#start"><i class="{{ $icons[0] }}"></i></a>
					<a class="btn-round" style="right: 0" href="#end"><i class="{{ $icons[1] }}"></i></a>
				<div class="group">
					<div id="start"></div>
					@foreach($testimoni as $key)
						<div class="item">
							<div class="box">
								<div class="profile-image">
									<div class="image">
										<img src="{{ url('/testimonials/'.$key->image) }}" alt="{{ $key->image }}"">
									</div>
								</div>
								<h1 class="medium-text">{{ $key->name }}</h1>
								<div class="star">
									@for ($i = 1; $i < $key->rate; $i++)
										<i class="{{ $icons[2] }}"></i>
									@endfor
								</div>
								<p>{{ $key->message }}</p>
							</div>
						</div>
					@endforeach
					<div id="end"></div>
				</div>
			</div>
		</section>
	@endif
@endsection
@section('footer')
@endsection