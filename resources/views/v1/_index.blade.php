@extends('layouts.app')

@section('styles')
    <style type="text/css">
        .list-wrap {
            min-height: 250px;
        }

        .list-wrap .icon img {
            width: 70px !important;
        }

        .list-wrap p {
            overflow: visible;
        }
    </style>
@endsection

@section('content')
    <section id="hero" class="hero sticked-header-offset">
        <div id="particles-js"></div>
        <div id="repulse-circle-div"></div>
        <div class="container position-relative">

            @if (!empty($sliderImages->count()))
                <div class="hero-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($sliderImages as $h_slider)
                            @php
                                $parentImage = $h_slider->getImageSingle($h_slider->id);
                            @endphp
                            <div class="swiper-slide">
                                <div class="row gy-5 aos-init aos-animate">
                                    <div class="col-lg-6 d-flex flex-column justify-content-center text-left caption">
                                        <h1 data-aos="fade-up">{{ $h_slider->caption }}</h1>
                                        <h2 data-aos="fade-up">{{ Str::of($h_slider->short_description)->limit(150) }}</h2>
                                        <div class="social" data-aos="fade-up">
                                            <a href="#"><i class="bi bi-twitter"></i></a>
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <a href="{{ url('contact') }}" class="default-theme-btn-one mr-20"
                                                data-aos="fade-up">Contact
                                                Us<span></span></a>
                                            <a href="{{ url($h_slider->product_slug) }}" class="default-theme-btn-two"
                                                data-aos="fade-up">Get
                                                Started<span></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex flex-column align-items-right justify-content-center"><img
                                            src="{{ url($parentImage->getImageInfo()) }}"
                                            class="img-fluid rounded-4 mb-4 mt-m70" alt="">
                                    </div>

                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>
            @endif

        </div>
    </section>

    <div id="services" class="section">
        <div class="top-icon-box position-relative">
            <div class="container position-relative">
                <div class="section-header" data-aos="fade-up">
                    <h2>Welcome to {{ config('siteconfig.sitename') }}</h2>
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
                </div>
                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6" data-aos="fade-right">
                        <a href="{{ url('about') }}">
                            <div class="icon-box">
                                <div class="icon"><i class="flaticon-001-edit-tools"></i></div>
                                <h4 class="title">Creative Design Aproach</h4>
                                <p>
                                    Make your signage dreams come to life! We're excited to embark on this creative journey
                                    with you and bring your vision to reality. You give us the task, we do everthing you
                                    need.
                                </p>
                                <span></span>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-md-6" data-aos="fade-up">
                        <a href="{{ url('about') }}">
                            <div class="icon-box">
                                <div class="icon"><i class="flaticon-031-database"></i></div>
                                <h4 class="title">Unparalleled Craftsmanship</h4>
                                <p>
                                    Crafting exceptional signage isn't just a job for us; it's our passion and our craft. We
                                    understand that every sign we create is a reflection of your brand and a vital component
                                    of your visual identity.
                                </p>
                                <span></span>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-md-6" data-aos="fade-right">
                        <a href="{{ url('about') }}">
                            <div class="icon-box">
                                <div class="icon"><i class="flaticon-132-edit-tools"></i></div>

                                <h4 class="title"> Dedication to Excellence</h4>
                                <p>
                                    We are commited to achieving the highest standards in all aspects of our work and
                                    endeavors going above and beyond, exceeding expectations, and consistently delivering
                                    exceptional results
                                </p>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about" class="about">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>How We Do It</h2>
                <p>
                    <span class="small-text"> At <span class="big-text">{{ config('siteconfig.sitename') }}</span>, we
                        believe in a collaborative approach to creating exceptional signage solutions
                        that meet and exceed our clients' expectations. Our streamlined process ensures clarity, efficiency,
                        and
                        satisfaction at every stage of your signage project.
                    </span>
                </p>
            </div>
            <div class="row featured">
                <div class="col-md-6">
                    <div class="list-wrap" data-aos="fade-up">
                        <div class="icon">
                            <img src="assets/front/assets/images/icons/consult.svg" alt="icon">
                        </div>
                        <div class="description">
                            <h4>Initial, <span style="color: #c00113;"> Consultation</span></h4>
                            <p>
                                The journey begins with an initial consultation where we take the time to understand your
                                needs, goals, and vision for your signage project. Whether you're looking to enhance brand
                                visibility, promote a product or service, or simply update your existing signage, we listen
                                attentively to your requirements and offer expert guidance to help bring your ideas to life.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="list-wrap" data-aos="fade-up">
                        <div class="icon">
                            <img src="assets/front/assets/images/icons/icon-1.svg" alt="icon">
                        </div>
                        <div class="description">
                            <h4>Design, <span style="color: #c00113;"> Concept</span></h4>
                            <p>
                                Once we have a clear understanding of your goals, our talented design team will create
                                custom design concepts that bring your vision to life. We'll present you with several
                                options to choose from, and we welcome your feedback to ensure that the final design
                                reflects your brand identity and messaging.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="list-wrap" data-aos="fade-up">
                        <div class="icon">
                            <img src="assets/front/assets/images/icons/icon-1.svg" alt="icon">
                        </div>
                        <div class="description">
                            <h4>Fabrication,<span style="color: #c00113;"> Phase</span></h4>
                            <p>
                                Once the design is approved, our skilled craftsmen will begin the fabrication process using
                                the highest quality materials and state-of-the-art equipment. We take pride in our attention
                                to detail and commitment to quality craftsmanship, ensuring that every sign we produce meets
                                our rigorous standards of excellence.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="list-wrap" data-aos="fade-up">
                        <div class="icon">
                            <img src="assets/front/assets/images/icons/icon-1.svg" alt="icon">
                        </div>
                        <div class="description">
                            <h4> Product ,<span style="color: #c00113;"> Installation</span></h4>
                            <p>
                                With the fabrication complete, our professional installation team will coordinate the
                                delivery and installation of your signage with precision and efficiency. Whether it's indoor
                                signage, outdoor signage, illuminated signs, or vehicle wraps, we'll ensure that your signs
                                are installed securely and accurately for maximum impact.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="list-wrap" data-aos="fade-up">
                        <div class="icon">
                            <img src="assets/front/assets/images/icons/icon-1.svg" alt="icon">
                        </div>
                        <div class="description">
                            <h4>Installation,<span style="color: #c00113;"> Stage</span></h4>
                            <p>
                                With the fabrication complete, our professional installation team will coordinate the
                                delivery and installation of your signage with precision and efficiency. Whether it's indoor
                                signage, outdoor signage, illuminated signs, or vehicle wraps, we'll ensure that your signs
                                are installed securely and accurately for maximum impact.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="list-wrap" data-aos="fade-up">
                        <div class="icon">
                            <img src="assets/front/assets/images/icons/icon-1.svg" alt="icon">
                        </div>
                        <div class="description">
                            <h4>Quality,<span style="color: #c00113;"> Assurance</span></h4>
                            <p>
                                Throughout the process, we maintain strict quality control measures to ensure that every
                                sign meets our standards of excellence. From design to installation, we carefully inspect
                                each sign for quality, accuracy, and durability to ensure that it exceeds your expectations
                                and stands the test of time.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="list-wrap" data-aos="fade-up">
                        <div class="icon">
                            <img src="assets/front/assets/images/icons/icon-1.svg" alt="icon">
                        </div>
                        <div class="description">
                            <h4>Customer,<span style="color: #c00113;"> Satisfaction</span></h4>
                            <p>
                                At {{ config('siteconfig.sitename') }}, customer satisfaction is our top priority. We
                                strive
                                to provide a
                                seamless and enjoyable experience for our clients from start to finish. Our friendly and
                                knowledgeable team is always available to address your questions, concerns, and requests,
                                ensuring that your needs are met.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="featured" class="featured">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Why Choose {{ config('siteconfig.sitename') }}?</h2>
                <p>
                    It’s important to us that our signs look fantastic – but we also think very carefully about how they
                    work, how useful they are and whether they’re installed properly. Our considerations include:
                </p>
            </div>
            <div class="row">
                {{-- <div class="col-md-5 center">
                    <div class="list-center-wrap" data-aos="fade-up">
                        <div class="img-fluid">
                            <img src="{{ url('assets/front/assets/images/about.jpg') }}" alt="icon">
                        </div>
                    </div>
                </div> --}}


                <div class="col-md-12 left">
                    <div class="row">
                        <div class="col-md-12">
                            <p>In today's <span class="big-text">rapidly evolving technology</span> landscape, choosing
                                the right partner is crucial for your business success. At <span
                                    class="small-text">{{ config('siteconfig.sitename') }}</span>, we stand
                                out from the crowd with our unwavering commitment to quality, expertise, and customer
                                satisfaction.
                                Here are just a few reasons why you should choose us:
                            </p>
                        </div>

                        <div class="col-lg-6 left">
                            <div class="list-wrap" data-aos="fade-up">
                                <div class="icon">
                                    <img src="assets/front/assets/images/icons/icon-1.svg" alt="icon">
                                </div>
                                <div class="description">
                                    <h4>Expertise,<span style="color: #c00113;"> Experience</span></h4>
                                    <p>
                                        With {{ date('Y') - 2016 }}+ years of experience in the signage industry, we have
                                        the
                                        knowledge and expertise to deliver exceptional results. Our team consists of
                                        skilled designers, craftsmen, and installers who are dedicated to providing
                                        high-quality signage solutions tailored to your specific requirements.
                                    </p>
                                </div>
                            </div>

                            <div class="list-wrap" data-aos="fade-up">
                                <div class="icon">
                                    <img src="assets/front/assets/images/icons/icon-3.svg" alt="icon">
                                </div>
                                <div class="description">
                                    <h4>Size<span style="color: #c00113;"> Customization</span></h4>
                                    <p>
                                        We believe that one size does not fit all when it comes to signage. That's why
                                        we offer fully customizable solutions to meet your unique needs. Whether you
                                        need indoor or outdoor signage, illuminated signs, vehicle wraps, or trade show
                                        displays, we have the capabilities to bring your vision to life.
                                    </p>
                                </div>
                            </div>

                            <div class="list-wrap" data-aos="fade-up">
                                <div class="icon">
                                    <img src="assets/front/assets/images/icons/icon-2.svg" alt="icon">
                                </div>
                                <div class="description">
                                    <h4>Quality Materials and <span style="color: #c00113;"> Craftsmanship</span></h4>
                                    <p>
                                        We are committed to using only the highest quality materials and employing the
                                        latest manufacturing techniques to ensure that your signage is durable,
                                        long-lasting, and visually stunning. From design to installation, we maintain
                                        strict quality control standards to ensure that every sign meets our rigorous
                                        quality standards.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 right">
                            <div class="list-wrap" data-aos="fade-up">
                                <div class="icon">
                                    <img src="assets/front/assets/images/icons/icon-6.svg" alt="icon">

                                </div>
                                <div class="description">
                                    <h4><span style="color: #c00113;">Customer </span>Satisfaction</h4>
                                    <p>
                                        At {{ config('siteconfig.sitename') }}, customer satisfaction is our top
                                        priority. We pride ourselves on providing excellent customer service and
                                        communication throughout the entire process. From the initial consultation to
                                        the final installation, we are dedicated to exceeding your expectations and
                                        delivering results that you'll love.
                                    </p>
                                </div>
                            </div>

                            <div class="list-wrap" data-aos="fade-up">
                                <div class="icon">
                                    <img src="assets/front/assets/images/icons/icon-4.svg" alt="icon">
                                </div>
                                <div class="description">
                                    <h4><span style="color: #c00113;">Competitive </span>Pricing</h4>
                                    <p>
                                        We believe that quality signage shouldn't break the bank. That's why we offer
                                        competitive pricing without compromising on quality. We work with you to find
                                        solutions that fit your budget while still meeting your signage needs.
                                    </p>
                                </div>
                            </div>

                            <div class="list-wrap" data-aos="fade-up">
                                <div class="icon">
                                    <img src="assets/front/assets/images/icons/icon-5.svg" alt="icon">
                                </div>
                                <div class="description">
                                    <h4><span style="color: #c00113;">Timely </span>Delivery</h4>
                                    <p>
                                        We understand the importance of deadlines and strive to deliver your signage on
                                        time and within budget. Our efficient production process and streamlined project
                                        management ensure that your project is completed promptly without sacrificing
                                        quality.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="call-to-action" class="call-to-action">
        <div class="container text-left aos-init aos-animate" data-aos="zoom-out">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h3>Let's Discuss your Projects</h3>
                </div>
                <div class="col-lg-3 text-right">
                    <a class="default-theme-btn-one" href="{{ config('siteconfig.contacts.email') }}">Conatct Us
                        <span></span></a>
                </div>
            </div>
        </div>
    </section>


    <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Our Products</h2>
                <p>Here are just but a few of our products</p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-4">
                    <article>
                        <div class="post-img">
                            <img src="{{ url('assets/front/assets/images/blog/blog-1.jpg') }}" alt=""
                                class="img-fluid">
                        </div>
                        <h2 class="title">
                            <a href="">3D Built Up Letters</a>
                        </h2>
                        <p class="text-4-line">
                            To host a website on any hosting provider, you need to follow these
                            steps: 1 Choose a hosting provider and sign up for a hosting plan. 2 Register a domain name
                        </p>
                        <a href="">Read More...</a>
                    </article>
                </div>

                <div class="col-lg-4">
                    <article>
                        <div class="post-img">
                            <img src="assets/front/assets/images/blog/blog-2.jpg" alt="" class="img-fluid">
                        </div>
                        <h2 class="title">
                            <a href="">How to create add on google adwords?</a>
                        </h2>

                        <p class="text-4-line">
                            Google AdWords add-ons are third-party tools and services that can
                            extend the functionality of the AdWords platform. They can help you with tasks such as
                            managing your campaigns, tracking your performance,
                        </p>
                        <a href="">Read More...</a>

                    </article>
                </div>

                <div class="col-lg-4">
                    <article>
                        <div class="post-img">
                            <img src="assets/front/assets/images/blog/blog-3.jpg" alt="" class="img-fluid">
                        </div>
                        <h2 class="title">
                            <a href="">What is digital marketing and why is important?</a>
                        </h2>

                        <p class="text-4-line">
                            Digital marketing is the use of digital channels to promote or market
                            products or services to consumers and businesses. It includes a wide range of activities,
                            such as search engine optimization (SEO), pay-per-click (PPC) advertising, social media
                            marketing, content marketing, and email marketing.
                        </p>
                        <a href="">Read More...</a>
                    </article>
                </div>

            </div>

        </div>
    </section>

    <div id="clients" class="clients section">
        <div class="container" data-aos="zoom-out">

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/front/assets/images/clients/c-1.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/front/assets/images/clients/c-2.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/front/assets/images/clients/c-3.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/front/assets/images/clients/c-4.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/front/assets/images/clients/c-5.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/front/assets/images/clients/c-6.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/front/assets/images/clients/c-7.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/front/assets/images/clients/c-8.jpg" class="img-fluid"
                            alt=""></div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('scripts')
@endsection
