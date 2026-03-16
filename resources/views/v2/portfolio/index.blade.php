	@extends($version.'layouts.app')
	@section('content')
	<section class="page-title">
		<div class="auto-container">
			<!-- Icons Box -->
			<div class="icons-box parallax-scene-1" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
				<div class="icon-one" data-depth="0.10" style="transform: translate3d(9.8px, -3.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></div>
				<div class="icon-two" data-depth="0.30" style="transform: translate3d(29.4px, -9.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
					<img src="{{ url('assets/v2/images/icons/vector-9.png') }}" alt="">
				</div>
				<div class="icon-three" data-depth="0.30" style="transform: translate3d(29.4px, -9.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
					<img src="{{ url('assets/v2images/icons/vector-34.png') }}" alt="">
				</div>
				<div class="icon-four" data-depth="0.10" style="transform: translate3d(9.8px, -3.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></div>
			</div>
			<h2>{{ !empty($meta_title)?$meta_title:'Our Portfolio' }}</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ url('') }}">Home</a></li>
				<li>{{ !empty($meta_title)?$meta_title:'Our Portfolio' }}</li>
			</ul>
		</div>
	</section>


	@if (!empty($galleryImages))
	@php
	$myClasses=['col-lg-6','col-lg-3']
	@endphp
	<div class="project-page-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="masonry-items-container-two row clearfix" style="position: relative; height: 1280.27px;">
					@include($version.'portfolio._portfolio',['galleryImages'=>$galleryImages,'myClasses'=>$myClasses])
				</div>
			</div>
		</div>
	</div>
	@endif


	<!-- Brand Section -->
	@include($version.'_brand')
	<!-- End Brand Section -->
	@endsection