<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ !empty($meta_title) ? ucwords($meta_title) . ' | ' : '' }} {{ config('siteconfig.sitename') }} </title>
    @if (!empty($meta_description))
        <meta name="description" content="{{ $meta_description }}">
    @endif
    @if (!empty($meta_keywords))
        <meta name="keywords" content="{{ $meta_keywords }}">
    @endif
    <link href="{{ url('assets/front/assets/images/favicon.jpg') }}" rel="icon">
    <link href="{{ url('assets/front/assets/images/apple-touch-icon.png') }}" rel="apple-touch-icon">


    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <link href="{{ url('assets/front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets/front/assets/flaticons/flaticon.css') }}" rel="stylesheet">
    <link href="{{ url('assets/front/assets/stylesheets/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ url('assets/front/assets/stylesheets/styles.css') }}" rel="stylesheet">

    <style type="text/css">
        .about {
            background: #ededed
        }
    </style>
    @yield('styles')
</head>

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
    {{-- <div id="preloader"></div> --}}

    @include('layouts.partials._header')

    @yield('content')

    @include('layouts.partials._footer')

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center active">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <script src="{{ url('assets/front/assets/javascripts/jquery.min.js') }}"></script>
    <script src="{{ url('assets/front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('assets/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/front/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('assets/front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/front/assets/javascripts/plugins.js') }}"></script>
    <script src="{{ url('assets/front/assets/javascripts/purecounter_vanilla.js') }}"></script>
    <script src="{{ url('assets/front/assets/javascripts/validator.min.js') }}"></script>
    <script src="{{ url('assets/front/assets/javascripts/contactform.js') }}"></script>
    <script src="{{ url('assets/front/assets/javascripts/particles.min.js') }}"></script>
    <script src="{{ url('assets/front/assets/javascripts/script.js') }}"></script>

    <script src="{{ url('assets/front/assets/javascripts/main.js') }}"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
    @yield('scripts')
</body>

</html>
