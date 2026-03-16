@if (!empty($rootCategories))
<!-- Inner Container -->
<div class="inner-container">
    <div class="three-item-carousel owl-carousel owl-theme">
        @foreach ($rootCategories as $service)
        @php
        $serviceImg = $service->getImageSingle($service->id);
        @endphp
        <!-- Service Block Four -->
        <div class="service-block-four">
            <div class="inner-box">
                <div class="image">
                    <a href="{{ $service->slug }}"><img class="service-image-thumb" src="{{ !empty($serviceImg)?$serviceImg->getImageInfo():url('assets/v2/images/background.jpg') }}" alt="" /></a>
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