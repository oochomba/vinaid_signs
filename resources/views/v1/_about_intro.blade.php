<div class="container-fluid py-5 my-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="{{url('assets/v1/front//img/about1.jpg')}}" class="img-fluid w-75 rounded" alt=""
                        style="margin-bottom: 25%;">
                    <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                        <img src="{{url('assets/v1/front//img/about2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <h5 class="text-primary">About Us</h5>
                <h1>Welcome to {{ config('siteconfig.sitename') }}</h1>
                <p>Where <span class="big-text">creativity meets visibility!</span><span class="small-text">
                        We specialize in crafting bespoke signage solutions</span>
                    that make your brand stand out in the crowd. Whether you need eye-catching outdoor signs,
                    captivating indoor displays, or attention-grabbing vehicle wraps, we've got you covered.
                    Explore our <a href="{{ url('portfolio') }}">Portfolio</a> and let's bring your brand vision to
                    life!
                </p>
                <p>
                    At <span class="small-text">{{ config('siteconfig.sitename') }},</span> we believe that signage is
                    more than just a wayfinding tool—it's
                    a powerful means of communication that can elevate brands, transform spaces, and leave a lasting
                    impression. With our passion for design, dedication to quality, and commitment to exceeding
                    expectations, we're here to help you make a statement that truly stands out.
                </p>
                <p>
                    Whether you're looking to enhance your storefront, captivate indoor spaces, or make your brand
                    mobile with eye-catching vehicle wraps, we've got the expertise and creativity to bring your vision
                    to life. From concept to installation, our team of skilled professionals is with you every step of
                    the way, ensuring that your signage journey is seamless and stress-free.

                </p>
                @if (Request::segment(1) == '')
                    <a href="{{ url('about') }}" class="btn btn-secondary rounded-pill px-5 py-3 text-white">
                        More Details
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
