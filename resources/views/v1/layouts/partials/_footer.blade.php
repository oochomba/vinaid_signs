<footer id="footer" class="footer-section">
    <div class="container">
        <div class="footer-content pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="#" class="logo d-flex align-items-center">
                                <img src="{{url('assets/front/assets/images/logoblack.png')}}" alt="logo">
                            </a>
                        </div>
                        <div class="footer-text">
                            <p>
                                At {{ config('siteconfig.sitename') }} we are passionate about providing businesses
                                higly customized signage solution that portray your business brand.
                            </p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="javascript:;" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#javascript:;" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="javascript:;" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="javascript:;" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="service-widget footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Services</h3>
                        </div>
                        <ul class="list">

                            @php
                                $rootCategories = App\Models\CategoryModel::getRootCategories();
                            @endphp
                            @if (!empty($rootCategories))
                                @foreach ($rootCategories as $service)
                                    <li><a href="{{ url($service->slug) }}">{{ $service->name }}</a></li>
                                @endforeach
                            @endif

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="service-widget footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Information</h3>
                        </div>
                        <ul class="list">
                            <li><a href="{{url('about')}}">About</a></li>
                            <li><a href="javascript:;">FAQs</a></li>
                            <li><a href="javascript:;">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="contact-widget footer-widget mb-25">
                        <div class="footer-widget-heading">
                            <h3>Contacts</h3>
                        </div>
                        <div class="footer-text">
                            <p><i class="bi bi-geo-alt-fill mr-15"></i>
                                {{ config('siteconfig.contacts.location.name') }}</p>
                            </p>
                            <p><i class="bi bi-telephone-inbound-fill mr-15"></i>
                                {{ config('siteconfig.contacts.phone') }}</p>
                            <p><i class="bi bi-envelope-fill mr-15"></i> {{ config('siteconfig.contacts.email') }}
                            </p>
                        </div>
                    </div>
                    {{-- <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don't miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                                <button>Subscribe<span></span></button>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center">
                    <div class="copyright-text">
                        <p>{{ config('siteconfig.sitename') }}<span>.</span> © {{ date('Y') }} - Designed by
                            <a href="tel:254790 849746">Ochomba Obadiah +254 790 849746</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
