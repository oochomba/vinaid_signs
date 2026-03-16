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
			<h2>Project Detail</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ url('') }}">Home</a></li>
				<li><a href="{{ url('projects') }}">Projects</a></li>
				<li>{{ $project->title }}</li>
			</ul>
		</div>
	</section>
	<!-- End Page Title -->

	<!-- Project Detail Section -->
	<div class="project-detail-section">
		<div class="auto-container">
			<div class="inner-container">
				@php
				$projectImage = $project->getImageSingle($project->id);
				@endphp
				<div class="image">
					<img src="{{ !empty($projectImage)?$projectImage->getImageInfo(): url('assets/v2/images/background.jpg') }}" alt="" />
				</div>
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<!-- Info Outer -->
					<div class="info-outer d-flex justify-content-between align-items-center flex-wrap">

						@if (!empty($project->client))
						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner">
								<span class="icon flaticon-avatar"></span>
								<strong>Client name</strong>
								{{ $project->client }}
							</div>
						</div>
						@endif


						@if (!empty($project->category_name))
						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner custom-box-inner">
								<span class="icon flaticon-list"></span>
								<strong>Catagory</strong>
								<a href="{{ url($project->category_slug ) }}">{{ $project->category_name }}</a>
							</div>
						</div>
						@endif


						<!-- Info Box -->
						@php
						$projectCategories = App\Models\CategoryModel::getSubCategoriesByParentId($project->id);
						@endphp
						@if (!empty($projectCategories))
						<div class="info-box">
							<div class="box-inner custom-box-inner">
								<span class="icon flaticon-tag"></span>
								<strong>Tags</strong>
								@foreach ($projectCategories as $projectCategory)
								<a href="{{ url($project->category_slug . '/' . $projectCategory->slug) }}">{{ $projectCategory->name }}</a>,
								@endforeach
							</div>
						</div>
						@endif


					</div>
					<!-- Button Outer -->
					<div class="button-box">
						<a href="{{ url('contact') }}" class="theme-btn project-btn">Need Similar Project?</a>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-8 col-md-12 col-sm-12">
						<h3>{{ ucwords($project->title) }}</h3>
						{!! $project->description !!}


						@php
						$projectImages=$project->getImage;
						@endphp
						@if (!empty($projectImages->count()&&$projectImages->count()>1))
						<section class="services-section-six">
							<div class="auto-container">
								<div class="sec-title centered">
									<h2><span>{{ $project->title }}</span> Portfolio </h2>
								</div>
								<div class="">
									<div class="row">
										@foreach ($projectImages as $projectImage)
										@if ($loop->iteration!==1)
										@if ($projectImage->getImageInfo())
										<div class="col-lg-3">
											<a href="{{ $projectImage->getImageInfo() }}" class="lightbox-image">
												<img src="{{ $projectImage->getImageInfo() }}" alt="{{ $project->title }}" class="w-100 mb-2 mb-md-4 shadow-1-strong rounded">
											</a>
										</div>
										@endif

										@endif
										@endforeach
									</div>
								</div>
							</div>
						</section>

						@endif


					</div>
					<div class="col-lg-4 col-md-8 col-sm-12">
						<div class="project-info-box">
							<ul class="info-list">
								@if (!empty($setting->address))
								<li>
									<strong>our address</strong>
									{!! $setting->address !!}
								</li>
								@endif

								<li>
									<strong>Contact way</strong>
									@if (!empty($setting->address))
									<a href="mailto:{{ $setting->email }}"><span class="icon flaticon-chat-2"></span>{{ $setting->email }}</a><br>
									@endif
									@if (!empty($setting->phone))
									<a href="tel:{{ $setting->phone }}"><span class="icon flaticon-call-1"></span>{{ $setting->phone }}</a>
									@endif
									@if (!empty($setting->phone_two))
									&nbsp;/&nbsp; <a href="tel:{{ $setting->phone }}">{{ $setting->phone_two }}</a>
									@endif
								</li>
							</ul>
							@if (!empty($setting->work_hours))
							<div class="opening">
								<span class="icon flaticon-clock"></span>
								<strong>Opening Houres</strong>
								{!! $setting->work_hours !!}
							</div>
							@endif


							<!-- Social Box -->
							<ul class="social-box">
								@if (!empty($setting->facebook_link))
								<li><a href="{{ $setting->facebook_link }}" class="fa fa-facebook"></a></li>
								@endif
								@if (!empty($setting->twitter_link))
								<li><a href="{{ $setting->twitter_link }}" class="fa fa-twitter"></a></li>
								@endif
								@if (!empty($setting->instagram_link))
								<li><a href="{{ $setting->instagram_link }}" class="fa fa-instagram"></a></li>
								@endif
								@if (!empty($setting->youtube_link))
								<li><a href="{{ $setting->youtube_link }}" class="fa fa-youtube"></a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Project Detail Section -->


	@include($version.'_brand')
	@endsection