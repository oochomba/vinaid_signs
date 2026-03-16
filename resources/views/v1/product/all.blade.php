@extends($version . 'layouts.app')
@section('styles')
    <style type="text/css">
        /* .blog-content p {
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 5;
                                        -webkit-box-orient: vertical;
                                    } */
    </style>
@endsection
@section('content')
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Our Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>

    @include($version . '_facts')



    <div class="container-fluid services py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Services</h5>

                <h1>Services Built Specifically For Your Business</h1>
            </div>


            <div class="row g-5 justify-content-center">
                @foreach ($services as $service)
                    @php
                        $serviceImg = $service->getImageSingle($service->id);
                    @endphp
                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-item position-relative bg-light rounded">
                            @if (!empty($serviceImg))
                                <img src="{{ $serviceImg->getImageInfo() }}" class="img-fluid w-100 rounded-top"
                                    alt="{{ $service->name }}" style="width: 100%;height:245px;object-fit:cover">
                            @else
                                <img src="{{ url('assets/front/img/background.jpg') }}" class="img-fluid w-100 rounded-top"
                                    alt="{{ $service->name }}" style="width: 100%;height:245px;object-fit:cover">
                            @endif

                            <a href="{{ url($service->slug) }}">
                                <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                                    style="top: -28px; right: 20px;">{{ $service->name }}</span>
                            </a>

                            <div class="blog-content text-center position-relative px-3" style="">
                                <p class="py-2">
                                    {!! Str::of($service->description)->limit(150) !!}
                                </p>
                            </div>
                            <div
                                class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                <a href="{{ $service->slug }}" class="text-white"><small><i
                                            class="fas fa-more me-2 text-secondary"></i>Read More</small></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection

@section('scripts')
@endsection
