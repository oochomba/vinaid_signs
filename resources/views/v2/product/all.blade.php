	@extends($version.'layouts.app')
	@section('content')
	<!-- Page Title -->
	<section class="page-title">
		<div class="auto-container">
			<!-- Icons Box -->
			<div class="icons-box parallax-scene-1">
				<div class="icon-one" data-depth="0.10"></div>
				<div class="icon-two" data-depth="0.30">
					<img src="{{ url('assets/v2/images/icons/vector-9.png') }}" alt="" />
				</div>
				<div class="icon-three" data-depth="0.30">
					<img src="{{ url('assets/v2/images/icons/vector-34.png') }}" alt="" />
				</div>
				<div class="icon-four" data-depth="0.10"></div>
			</div>
			<h2>Our Services</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ url('') }}">Home</a></li>
				<li>Services</li>
			</ul>
		</div>
	</section>
	<!-- End Page Title -->


	<section class="services-section-four">
		<div class="color-one"></div>
		<div class="color-two"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div>
						<div class="title">Ready to kick start your business? {{ $setting->website_name }} is ready to sort you</div>
						<h2>Provide <span>Stuning </span> <br> services for your business</h2>
					</div>

					<div>
						<div class="text">Design, Printing, Branding & Signage <br> for your company, business, organization, institution etc <br> at an affordable price</div>
					</div>
				</div>
			</div>

			<!-- Inner Container -->
			@if (!empty($rootCategories))
			<div class="inner-container custom-inner-container">
				<div class="row">
					@foreach ($rootCategories as $service)
					@php
					$serviceImg = $service->getImageSingle($service->id);
					@endphp
					<div class="col-md-4 service-block-four">
						<div class="inner-box custom-inner-box">
							<div class="image my-service custom-my-service">
								<a href="{{ $service->slug }}"><img src="{{ !empty($serviceImg)?$serviceImg->getImageInfo():url('assets/v2/images/background.jpg') }}" alt="" /></a>
							</div>
							<div class="lower-content">
								<h4><a href="{{ $service->slug }}">{{ $service->name }}</a></h4>
								<div class="text">
									{!! Str::limit(strip_tags($service->description), $limit = 150, $end = '...') !!}
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>

			@endif

		</div>
	</section>

	@include($version.'_brand')

	@endsection