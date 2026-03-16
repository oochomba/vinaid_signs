@extends($version.'layouts.app')

@section('styles')
    <style type="text/css">
        .breadcrumbs nav ol {
            justify-content: left;
        }

        .list-wrap {
            min-height: 220px;
        }

        .list-wrap .icon img {
            width: 70px !important;
        }

        .list-wrap p {
            overflow: visible;
        }

        .list-wrap {
            display: flex;
            margin-bottom: 20px;
            background: #fafafa;
            border-radius: 8px;
            padding: 20px;
            transition: 0.2s;
        }

        .list-wrap:hover {
            transform: translateY(-7px) !important;
        }

        .list-wrap p {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            /* -webkit-line-clamp: 2; */
            -webkit-box-orient: vertical;
        }

        .list-wrap:nth-child(3),
        .list-wrap:nth-child(6) {
            margin-bottom: 0;
        }

        .featured .icon {
            width: 142px;
            text-align: center;
            margin-right: 5px;
            margin-bottom: 20px;
        }

        .featured .icon img {
            /* width: 100%; */
            max-width: 70px;
            margin-right: 5px;
            width: 70px;
        }

        .list-center-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
            height: 100%;
            flex-direction: column;
        }

        .list-center-wrap img {
            width: 100%;
        }

        .center-icon {
            width: 170px;
            text-align: center;
        }

        .center-icon svg {
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid page-header py-5" style="background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url({{$page->getImageInfo()}}) center center no-repeat;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">{{ !empty($page->title)?$page->title:'Page not found' }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>

                    <li class="breadcrumb-item" aria-current="page">{{ !empty($page->title)?$page->title:'Page not found' }}</li>
                </ol>
            </nav>
        </div>
    </div>


    @include($version.'_facts')

    <div class="container-fluid pb-0 mb-0 team">
        <div class="container pb-5">
            <br>
            @if(!empty($page->description))
            {!! $page->description !!}
            @else
            <div class="pt-3 mt-3 wow fadeIn" data-wow-delay=".3s">
                <h2 class="text-primary">Sorry!! Page not found</h2>
            </div>
            @endif
            <br>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
