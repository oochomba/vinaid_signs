	@extends($version.'layouts.app')
	@section('content')
	<!-- Page Title -->
	<section class="page-title">
		<div class="auto-container">
			<!-- Icons Box -->
			<div class="icons-box parallax-scene-1">
				<div class="icon-one" data-depth="0.10"></div>
				<div class="icon-two" data-depth="0.30">
					<img src="images/icons/vector-9.png" alt="" />
				</div>
				<div class="icon-three" data-depth="0.30">
					<img src="images/icons/vector-34.png" alt="" />
				</div>
				<div class="icon-four" data-depth="0.10"></div>
			</div>
			<h2>{{ $category->name }}</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ url('') }}">Home</a></li>
				<li><a href="{{ url('services') }}">Services</a></li>
				@if (!empty($root_category))
				<li class="breadcrumb-item">
					<a href="{{ url($root_category->slug) }}">{{ $root_category->name }}</a>
				</li>
				@endif
				@if (!empty($sub_root_category))
				<li class="breadcrumb-item">
					<a href="{{ url($root_category->slug . '/' . $sub_root_category->slug) }}">
						{{ $sub_root_category->name }}
					</a>
				</li>
				@endif
				<li class="breadcrumb-item">
					{{ $category->name }}
				</li>
			</ul>
		</div>
	</section>
	<!-- End Page Title -->



	<div class="sidebar-page-container">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Content Side -->
				<div class="content-side {{ isset($root_category)&&!empty($root_category)?'col-xl-9 col-lg-8':'col-xl-12 col-lg-12' }}  col-md-12 col-sm-12">
					<!-- Service Detail -->
					<div class="service-detail page-detail">
						<div class="inner-box">
							@php
							$serviceImg = $category->getImageSingle($category->id);
							@endphp

							@if (!empty($serviceImg))
							<div class="image">
								<img src="{{ url($serviceImg->getImageInfo()) }}" alt="" />
							</div>

							@endif

							<div class="lower-content">
								<h3>{{ $category->name }}</h3>
								{!! $category->description !!}
							</div>
						</div>
					</div>

					@php
					$subCategories = App\Models\CategoryModel::getSubCategoriesByParentId($category->id);
					@endphp

					@if (!empty($subCategories->count()))
					<div class="shops-outer">
						<div class="row clearfix">

							@foreach ($subCategories as $subCategory)
							<div class="shop-item col-lg-3 col-md-4 col-sm-6">
								<div class="inner-box">
									<div class="image">
										@php
										$subCategoryImage = $subCategory->getImageSingle($subCategory->id);
										@endphp
										<a href="{{ $category->slug . '/' . $subCategory->slug }}"><img src="{{ !empty($subCategoryImage)?url($subCategoryImage->getImageInfo()):url('assets/v2/images/background.jpg') }}" alt=""></a>
									</div>
									<div class="lower-content">
										<h6><a href="{{ $category->slug . '/' . $subCategory->slug }}">{{ $subCategory->name }}</a></h6>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					@endif

					@if (!empty($category))
					@php
					$categoryImages=$category->getImage;
					@endphp
					@if (!empty($categoryImages->count()&&$categoryImages->count()>1))
					<section class="services-section-six">
						<div class="auto-container">
							<div class="sec-title centered">
								<h2><span>{{ $category->name }}</span> Portfolio </h2>
							</div>
							<div class="">
								<div class="row">
									@foreach ($categoryImages as $categoryImage)
									@if ($loop->iteration!==1)
									<div class="col-lg-3">
										<a href="{{ url($categoryImage->getImageInfo()) }}" class="lightbox-image">
											<img
												src="{{ url($categoryImage->getImageInfo()) }}"
												alt="{{ $category->name }}"
												class="w-100 mb-2 mb-md-4 shadow-1-strong rounded" />
										</a>
									</div>
									@endif

									@endforeach
								</div>
							</div>
						</div>
					</section>
					@endif

					@endif






				</div>

				@if (isset($root_category)&&!empty($root_category))

				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					@if (isset($getSubCategoryFilter) && !empty($getSubCategoryFilter))

					<aside class="sidebar sticky-top">

						<!-- Services Widget -->
						<div class="sidebar-widget services-widget">
							<div class="widget-content">

								<!-- Category List Three -->
								<ul class="category-list-three">
									@foreach ($getSubCategoryFilter as $related )
									<li class="{{ $related->slug==$category->slug?'current':'' }}"><a href="{{ $related->slug==$category->slug?'#': url($root_category->slug.'/'.$related->slug) }}">{{ $related->name }}</a></li>
									@endforeach
								</ul>

							</div>
						</div>
					</aside>
					@endif

				</div>

				@endif


			</div>
		</div>
	</div>

	@include($version.'_brand')
	@endsection