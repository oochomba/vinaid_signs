@foreach ($projects as $project)
@php
$projectImage = $project->getImageSingle($project->id);
@endphp
<!-- Project Block -->
<div class="project-block masonry-item {{Request::segment(1)==1?$myClasses: $myClasses[array_rand($myClasses)] }} col-md-6 col-sm-12">
    <div class="inner-box">
        <div class="image">
            <a href="{{ url('detail/' . $project->slug) }}"><img src="{{ !empty($projectImage)?$projectImage->getImageInfo():url('assets/v2/images/background.jpg') }}" alt="{{ $project->title }}" /></a>
            <div class="content">
                <h6><a href="{{ url('detail/' . $project->slug) }}">{{ $project->title }}</a></h6>
                <a class="arrow flaticon-right-arrow" href="{{ url('detail/' . $project->slug) }}"></a>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endforeach