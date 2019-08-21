@extends('layouts.app')
@section('title', 'Deskripsi website')
@section('banner')
	<div class="container">
		<h1 class="big-text">Buat websitemu hanya dalam hitungan menit.</h1>
		<p>Di sini selain menyediakan berbagai kebutuhan website, juga memberikan fitur buat website cepat. Ayo hosting dan buat websitemu di sini.</p>
		<a href="#" class="box-btn">Learn More</a>
	</div>
	<img src="{{ url('img/assets/bg_1.svg') }}" class="bg_banner">
	<svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L80,106.7C160,117,320,139,480,154.7C640,171,800,181,960,154.7C1120,128,1280,64,1360,32L1440,0L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,11111,320L0,320Z"></path></svg>
@endsection
@section('content')
	<section class="kategori">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-6 col-md-4">
					<div class="box">
						<div class="icon-wrapper">
							<div class="icon">
								<i class="fas fa-rocket"></i>
							</div>
						</div>
						<h3 class="medium-text">Hosting Cepat</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 col-md-4">
					<div class="box">
						<div class="icon-wrapper">
							<div class="icon">
								<i class="fas fa-satellite-dish"></i>
							</div>
						</div>
						<h3 class="medium-text">Sinyal Kuat</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 col-md-4">
					<div class="box">
						<div class="icon-wrapper">
							<div class="icon">
								<i class="fas fa-user-secret"></i>
							</div>
						</div>
						<h3>Keamanan yang terjamin</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="paket">
		<div class="container" style="display: flex;">
			<div style="max-width: 55%;padding-right: 15px;">
				<b style="color: #666">DISKON</b>
				<h3 class="big-text">Diskon 20% untuk pembelian hosting baru!</h3>
				<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				<a href="{{ url('') }}" class="box-btn">Get started</a>
			</div>
			<div class="ilustration">
				<img src="{{ url('/img/assets/bg_2.svg') }}" alt="bg_2" style="width: 75%;">
			</div>
		</div>
	</section>
	<section class="pricing" id="pricing">
		<div class="container">
			<h1 class="title" style="font-weight: bold;">Pricing</h1>
			<div class="row">
				<div class="col-sm-6 col-xs-6 col-md-4">
					<div class="box">
						<h3 class="medium-text">Small</h3>
						<h1 class="price" style="color: 26de81">
							<span class="icon-text">$</span>
							<span class="text">400</span>
							<span class="date">/YEAR</span>
						</h1>
						<ul>
							<li>Hosting kepatan lebih dari 1mb</li>
							<li>Kapasitas server yang longgar</li>
							<li>Backup data ketika perlu</li>
						</ul>
						<a href="" class="btnFull" style="background: #ccc">Sign up now</a>
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 col-md-4">
					<div class="box">
						<h3 class="medium-text">Pro</h3>
						<h1 class="price" style="color: #45aaf2">
							<span class="icon-text">$</span>
							<span class="text">600</span>
							<span class="date">/YEAR</span>
						</h1>
						<ul>
							<li>Hosting kepatan lebih dari 1mb</li>
							<li>Kapasitas server yang longgar</li>
							<li>Backup data ketika perlu</li>
						</ul>
						<a href="" class="btnFull" style="background: #45aaf2">Sign up now</a>
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 col-md-4">
					<div class="box">
						<h3 class="medium-text">Special</h3>
						<h1 class="price" style="color: #fc5c65">
							<span class="icon-text">$</span>
							<span class="text">900</span>
							<span class="date">/YEAR</span>
						</h1>
						<ul>
							<li>Hosting kepatan lebih dari 1mb</li>
							<li>Kapasitas server yang longgar</li>
							<li>Backup data ketika perlu</li>
						</ul>
						<a href="" class="btnFull" style="background: #fc5c65">Sign up now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="testimonial">
		<div class="container">
			<h1 class="title" style="max-width: 370px;line-height: 40px">Apa yang dikatakan client?</h1>
			<div class="container">
			</div>
			<a class="btn-round" style="left: 0" href="#start"><i class="fas fa-arrow-left"></i></a>
				<a class="btn-round" style="right: 0" href="#end"><i class="fas fa-arrow-right"></i></a>
			<div class="group">
				<div id="start"></div>
				@for($i = 1; $i < 10; $i++)
					<div class="item">
						<div class="box">
							<div class="profile-image">
								<div class="image"></div>
							</div>
							<h1 class="medium-text">Salung Prastyo</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
				@endfor
				<div id="end"></div>
			</div>
		</div>
	</section>
@endsection
@section('footer')
@endsection