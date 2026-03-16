	@extends($version.'layouts.app')
	@section('content')

	@if (!empty($projects))
	@php
	$myClasses=['col-lg-6','col-lg-3'];
	@endphp
	<!-- Project Page Section -->
	<div class="project-page-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="masonry-items-container-two row clearfix">
					@include($version.'projects._project_item',['projects'=>$projects,'myClasses'=>$myClasses])
				</div>
			</div>
		</div>
	</div>
	<!-- End Project Page Section -->
	@endif

	<div class="row">&nbsp;</div>


	@include($version.'_brand')
	@endsection