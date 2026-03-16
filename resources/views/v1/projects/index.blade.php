@extends($version . 'layouts.app')
@section('styles')
    <style type="text/css">
        .my-anchor a:hover,
        .my-anchor {
            text-decoration: underline;
            color: unset;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">
                Our Completed Projects
            </h1>
        </div>
    </div>

    @include($version . '_facts')

    <div class="container mt-4">
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-left mb-0">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item">Projects </li>
            </ol>
        </nav>
    </div>




    @if (!empty($projects))
        <div class="container-fluid projects py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Our Projects</h5>
                    <h1>Our Recently Completed Projects</h1>
                </div>
                <div class="row g-5">
                    @foreach ($projects as $project)
                        @php
                            $projectImage = $project->getImageSingle($project->id);
                        @endphp
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ !empty($projectImage) ? url($projectImage->getImageInfo()) : '' }}"
                                        class="img-fluid w-100 rounded" alt="{{ $project->title }}"
                                        style="width: 310px; height:254px;">
                                    <div class="project-content">
                                        <a href="{{ url('detail/' . $project->slug) }}" class="text-center">
                                            <h4 class="text-secondary">{{ $project->category_name }}</h4>
                                            <p class="m-0 text-white">{{ $project->title }}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection

@section('scripts')
@endsection
