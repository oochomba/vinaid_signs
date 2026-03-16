@extends($version.'layouts.app')

@section('styles')

@endsection

@section('content')
@include($version.'page._page_title')
@if (!empty($page->description))
<div class="auto-container">
    <div class="row clearfix">
        <!-- Content Side -->
        <div class="content-side col-xl-12 col-lg-12  col-md-12 col-sm-12">
            <!-- Service Detail -->
            <div class="service-detail page-detail">
                <div class="inner-box">
                    <div class="lower-content">
                        <div class="lower-content sec-title">
                            {!! $page->description !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@else
@include($version.'page.404')
@endif

@endsection

@section('scripts')
@endsection