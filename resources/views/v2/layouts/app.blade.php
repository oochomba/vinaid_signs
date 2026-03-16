<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ !empty($meta_title)?$meta_title.' | ':'' }} {{ !empty($setting->website_name)?$setting->website_name:'' }}</title>
    @if (!empty($meta_description))
    <meta name="description" content="{{ $meta_description }}">
    @endif
    @if (!empty($meta_keywords))
    <meta name="keywords" content="{{ $meta_keywords }}">
    @endif

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets -->
    <link href="{{ url('assets/v2/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('assets/v2/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/v2/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ url('assets/v2/css/custom.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ $setting->getFavicon() }}">
    <link rel="icon" href="{{ $setting->getFavicon() }}">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>
        <!-- Preloader End -->

        <!-- Main Header -->
        <header class="main-header">

            <!-- Header Lower -->
            <div class="header-lower">

                <div class="auto-container">
                    <div class="inner-container d-flex justify-content-between align-items-center">

                        <div class="logo-box d-flex align-items-center">
                            <!-- Nav Btn 
						<div class="nav-btn "><span class="icon flaticon-menu"></span></div> -->

                            <div class="nav-toggle-btn a-nav-toggle navSidebar-button">
                                <span class="hamburger">
                                    <span class="top-bun"></span>
                                    <span class="meat"></span>
                                    <span class="bottom-bun"></span>
                                </span>
                            </div>

                            <!-- Logo -->
                            <div class="logo"><a href="{{ url('') }}"><img src="{{ !empty($setting->getLogo()) ? $setting->getLogo():url('') }}" alt="{{ $setting->website_name }}" title=""></a></div>
                        </div>
                        <div class="nav-outer clearfix">

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                            <!-- Main Menu -->
                            <nav class="main-menu show navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class=" {{ Request::segment(1) == '' ? 'current' : '' }}"><a href="{{ url('') }}">Home</a></li>

                                        <li class=" {{ Request::segment(1) == 'about' ? 'current' : '' }}"><a href="{{ url('about') }}">About</a></li>

                                        @php
                                        $rootCategories = App\Models\CategoryModel::getRootCategories();
                                        @endphp
                                        @if (!empty($rootCategories))
                                        <li class="dropdown {{ Request::segment(1) == 'services' ? 'current' : '' }}"><a href="{{ url('services') }}">Services</a>
                                            <ul>
                                                @foreach ($rootCategories as $service)
                                                <li> <a href="{{ url($service->slug) }}"
                                                        class="dropdown-item">{{ $service->name }}</a></li>
                                                @endforeach

                                            </ul>
                                        </li>
                                        @endif
                                        <li class="{{ Request::segment(1) == 'projects' ? 'current' : '' }}"><a href="{{ url('projects') }}">Projects</a></li>
                                        <li class="{{ Request::segment(1) == 'blog' ? 'current' : '' }}"><a href="javascript:;">Blog</a></li>
                                        <li class="{{ Request::segment(1) == 'contact' ? 'current' : '' }}"><a href="{{ url('contact') }}">Contact us</a></li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->

                        </div>

                        <!-- Outer Box -->
                        <div class="outer-box d-flex align-items-center">
                            <!-- Cart Box -->
                            <div class="cart-box">
                                <div class="box-inner">

                                    <a href="javascript:void()" class="icon-box">
                                        <span class="icon flaticon-phone"></span>
                                        <i class="total-cart"><span class="icon flaticon-message"></span></i>
                                    </a>
                                    @if (!empty($setting->phone))
                                    Phone<br>
                                    <a class="phone" href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                                    @endif

                                </div>
                            </div>
                            <!-- End Cart Box -->

                            <!-- Button Box -->
                            <div class="button-box">
                                <a href="{{ url('contact') }}" class="theme-btn btn-style-one clearfix">
                                    <span class="btn-wrap">
                                        <span class="text-one">Get quate now</span>
                                        <span class="text-two">Get quate now</span>
                                    </span>
                                    <span class="icon flaticon-right-arrow"></span>
                                </a>
                            </div>

                        </div>
                        <!-- End Outer Box -->

                    </div>

                </div>
            </div>
            <!-- End Header Lower -->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!-- Logo -->
                    <div class="logo pull-left">
                        <a href="{{ url('') }}" title=""><img src="{{ !empty($setting->getLogo()) ? $setting->getLogo():url('') }}" alt="" title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="{{ url('') }}"><img src="{{ !empty($setting->getLogo()) ? $setting->getLogo():url('') }}" alt="" title=""></a></div>
                    <!-- Search -->
                    <div class="search-box">
                        <form method="post" action="{{ url('contact') }}">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
                                <button type="submit"><span class="icon flaticon-search-1"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->

        <!-- Sidebar Cart Item -->
        <div class="xs-sidebar-group info-group">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget">
                            X
                        </a>
                    </div>
                    <div class="sidebar-textwidget">

                        <!-- Sidebar Info Content -->
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="{{ url('') }}"><img src="{{ !empty($setting->getLogo()) ? $setting->getLogo():url('') }}" alt="" title=""></a>
                                </div>
                                <div class="content-box">
                                    @if (!empty($rootCategories))
                                    <h6>Services</h6>
                                    <ul class="sidebar-services-list">
                                        @foreach ($rootCategories as $service)
                                        <li> <a href="{{ url($service->slug) }}">{{ $service->name }}</a></li>
                                        @endforeach
                                    </ul>

                                    @endif

                                    <h6>Contact info</h6>
                                    <!-- List Style One -->
                                    <ul class="list-style-one">
                                        @if (!empty($setting->address))
                                        <li>
                                            <span class="icon flaticon-maps-and-flags"></span>
                                            <strong>Our office</strong>
                                            {!!$setting->address!!}
                                        </li>
                                        @endif

                                        @if (!empty($setting->phone))
                                        <li>
                                            <span class="icon flaticon-call-1"></span>
                                            <strong>Phone</strong>
                                            <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                                            @if (!empty($setting->phone_two))
                                            <br>
                                            <a href="tel:{{ $setting->phone_two }}">{{ $setting->phone_two }}</a>
                                            @endif

                                        </li>
                                        @endif

                                        @if (!empty($setting->email))
                                        <li>
                                            <span class="icon flaticon-mail"></span>
                                            <strong>Email</strong>
                                            <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                                        </li>
                                        @endif

                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->

        <!--start of content section-->
        @yield('content')
        <!--end of content section-->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- Email Box -->
            @if (!empty($setting->email))
            <div class="email-box">
                <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
            </div>
            @endif


            <!-- Social Box -->
            <ul class="social-box">
                @if (!empty($setting->twitter_link))
                <li><a href="{{ $setting->twitter_link }}">Tw</a></li>
                @endif
                @if (!empty($setting->facebook_link))
                <li><a href="{{ $setting->facebook_link }}">Fa</a></li>
                @endif
                @if (!empty($setting->instagram_link))
                <li><a href="{{ $setting->instagram_link }}">In</a></li>
                @endif
                @if (!empty($setting->youtube_link))
                <li><a href="{{ $setting->youtube_link }}">Yt</a></li>
                @endif
            </ul>
            <!-- End Social Box -->

            <!-- Scroll Box -->
            <div class="scroll-box scroll-to-target" data-target="html">
                <div class="scroll-text">Scroll</div>
            </div>
            <!-- End Scroll Box -->

            <!-- End Email Box -->
            <div class="auto-container">
                <!-- Upper Box -->
                <div class="upper-box">
                    <div class="row clearfix">
                        <!-- Title Column -->
                        <div class="title-column col-lg-6 col-md-12 col-sm-12">
                            <h2>We’d like to <span>Talk</span></h2>
                            <div class="text">Subscribe to our newsletter for timely updates.</div>
                        </div>
                        <div class="form-column col-lg-6 col-md-12 col-sm-12">
                            <!-- Subscribe Box -->
                            <div class="subscribe-box">
                                <form method="post" action="{{ url('newsletter-subscription') }}">
                                    <div class="form-group">
                                        {{ csrf_field() }}
                                        <input type="email" name="email" form-control {{ $errors->has('email') ? ' is-invalid' : '' }} value="" placeholder="Enter Email Address" required>
                                        <button type="submit" class="theme-btn btn-style-one clearfix">
                                            <span class="btn-wrap">
                                                <span class="text-one">Start With Us</span>
                                                <span class="text-two">Start With Us</span>
                                            </span>
                                            <span class="icon flaticon-right-arrow"></span>
                                        </button>
                                    </div>
                                    @if ($errors->has('email'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('email') }}.
                                    </span>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Widgets Section -->
                <div class="widgets-section">
                    <div class="row clearfix">
                        <!-- Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h5>About Us</h5>
                                        <div>
                                            <a href="{{url('/')}}">
                                            <img src="{{ !empty($setting->getFooterLogo())?$setting->getFooterLogo():'' }}" alt="" title="">

                                            </a>
                                        </div>
                                        @if (!empty($setting->footer_text))
                                        <div class="text">
                                            {!! $setting->footer_text !!}
                                        </div>
                                        @endif

                                        <ul class="contact-list">
                                            @if (!empty($setting->address))
                                            <li><span class="icon flaticon-map"></span>{!! $setting->address !!}</li>
                                            @endif

                                            @if (!empty($setting->phone))
                                            <li><span class="icon flaticon-call"></span>{{ $setting->phone }}{{ !empty($setting->phone_two)?' / '.$setting->phone_two :'' }}</li>
                                            @endif
                                            @if (!empty($setting->email))
                                            <li><span class="icon flaticon-mail"></span>{{ $setting->email }}</li>
                                            @endif

                                        </ul>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h5>Quick Link</h5>
                                        <ul class="page-list">
                                            <li><a href="{{ url('about') }}">About Us</a></li>
                                            <li><a href="{{ url('contact') }}">Contact Us</a></li>
                                            <li><a href="{{ url('services') }}">Our Services</a></li>
                                            <li><a href="{{ url('projects') }}">Projects</a></li>
                                            <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                                            <li><a href="{{ url('blog') }}">Blog</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h5>Help Link</h5>
                                        <ul class="page-list">
                                            <li><a href="{{ url('terms-conditions') }}">Terms & Conditions</a></li>
                                            <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                            <li><a href="{{ url('faq') }}">FAQs</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div class="footer-widget instagram-widget">
                                        <h5>Our Information</h5>
                                        <div class="award">Total Awards <span>X8</span></div>
                                        <!-- Demand -->
                                        <div class="demand-box">We provide fast on-demand <span>printing.</span></div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Lower Box -->
                <div class="lower-box">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <!-- Info Box -->
                        <div class="info-box">
                            <div class="title">Printing Projects</div>
                            <h6>For Collaboration ?</h6>
                        </div>
                        <!-- Info Box -->
                        <div class="info-box">
                            <div class="title">Send Us Messege For Inquiry</div>
                            @if (!empty($setting->email))
                            <h6>{{ $setting->email }}</h6>
                            @endif
                        </div>
                        <!-- Info Box -->
                        <div class="info-box">
                            <div class="title">Looking For Office</div>
                            @if (!empty($setting->address))
                            <h6> {!! $setting->address !!} </h6>
                            @endif
                        </div>
                    </div>

                    <br>
                    <div class="row pt-4 mt-3 border-top">
                        <div class="col-md-6 text-center text-md-start">
                            <div class="info-box">
                                <h6>© 2025. <a href="#">Vinaid Signs</a>.
                                    All right reserved.
                                </h6>
                            </div>

                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="info-box">
                                <h6>Designed By<a href="tel:254790849746">
                                        +254 790 849746
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Lower Box -->

            </div>
        </footer>
        <!-- End Main Footer -->

    </div>
    <!--End pagewrapper-->

    <!-- scrollToTop start -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
        </svg>
    </div>
    <!-- scrollToTop end -->

    <script src="{{ url('assets/v2/js/jquery.js') }}"></script>
    <script src="{{ url('assets/v2/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/v2/js/jquery.validate.min.js') }}"></script>
    <script src="{{ url('assets/v2/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/v2/js/magnific-popup.min.js') }}"></script>
    <script src="{{ url('assets/v2/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ url('assets/v2/js/appear.js') }}"></script>
    <script src="{{ url('assets/v2/js/parallax.min.js') }}"></script>
    <script src="{{ url('assets/v2/js/swiper.min.js') }}"></script>
    <script src="{{ url('assets/v2/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ url('assets/v2/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ url('assets/v2/js/owl.js') }}"></script>
    <script src="{{ url('assets/v2/js/wow.js') }}"></script>
    <script src="{{ url('assets/v2/js/isotope.js') }}"></script>
    <script src="{{ url('assets/v2/js/odometer.js') }}"></script>
    <script src="{{ url('assets/v2/js/mixitup.js') }}"></script>
    <script src="{{ url('assets/v2/js/backToTop.js') }}"></script>
    <script src="{{ url('assets/v2/js/nav-tool.js') }}"></script>
    <script src="{{ url('assets/v2/js/jquery-ui.js') }}"></script>
    <script src="{{ url('assets/v2/js/TweenMax.min.js') }}"></script>
    <script src="{{ url('assets/v2/js/script.js') }}"></script>

</body>

</html>