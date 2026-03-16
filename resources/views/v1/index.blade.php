@extends($version.'layouts.app')
@section('styles')
    <style type="text/css">
        .big-text {
            color: #c00113;
            font-size: 2rem;
            font-weight: 500;
        }

        .small-text {
            color: #353535;
            font-size: 1.4rem;
            line-height: 2rem;
        }

        .featured {
            position: relative;
        }

        .featured p {
            margin-bottom: 20px;
        }

        .featured .description p {
            margin-bottom: 0;
        }

        .left {
            text-align: left;
        }

        .right {
            text-align: left;
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

        .list-wrap .icon i {
            font-size: 5rem !important;
            color: var(--bs-primary)
        }

        .clients {
            padding: 10px 0;
        }

        .clients .swiper {
            padding: 10px 0;
        }

        .clients .swiper-slide img {
            transition: 0.3s;
            filter: grayscale(50%);
            opacity: 1;
            border-radius: 8px;
        }

        .clients .swiper-slide img:hover {
            transform: scale(1.1);
        }

        .clients .swiper-pagination {
            margin-top: 20px;
            position: relative;
        }

        .clients .swiper-pagination .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background-color: #fff;
            opacity: 1;
            background-color: #ddd;
        }

        .clients .swiper-pagination .swiper-pagination-bullet-active {
            background-color: var(--color-primary);
        }

        .team-carousel .owl-stage {
            margin-bottom: 2rem !important;
            height: unset;
        }

        .swiper-slide,
        .swiper-wrapper {
            height: unset !important;
        }
    </style>
@endsection
@section('content')
    @if (!empty($sliderImages->count()))
        <div class="container-fluid px-0">
            <div id="carouselId" class="carousel slide owlslider" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    @if (!empty($sliderImages[0]))
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                            aria-label="First slide"></li>
                    @endif
                    @if (!empty($sliderImages[1]))
                        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                    @endif
                    @if (!empty($sliderImages[2]))
                        <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                    @endif
                    @if (!empty($sliderImages[3]))
                        <li data-bs-target="#carouselId" data-bs-slide-to="3" aria-label="Fourth slide"></li>
                    @endif
                    @if (!empty($sliderImages[4]))
                        <li data-bs-target="#carouselId" data-bs-slide-to="4" aria-label="Fifth slide"></li>
                    @endif


                </ol>
                <div class="carousel-inner" role="listbox">
                    @if (!empty($sliderImages[0]))
                        <div class="carousel-item active">
                            <img src="{{ $sliderImages[0]->getImageSingle($sliderImages[0]->id)->getImageInfo() }}"
                                class="img-fluid" alt="First slide">
                            <div class="carousel-caption">
                                <div class="container carousel-content">
                                    <h6 class="text-secondary h4 animated fadeInUp">
                                        {{-- Best IT Solutions --}}
                                    </h6>
                                    <h1 class="text-white display-1 mb-4 animated fadeInRight">
                                        {{-- {{ $sliderImages[0]->caption }} --}}
                                    </h1>
                                    <p class="mb-4 text-white fs-5 animated fadeInDown">
                                        {{-- {{ Str::of($sliderImages[0]->short_description)->limit(150) }} --}}
                                    </p>
                                    {{-- <a href="{{ url($sliderImages[0]->product_slug) }}" class="me-2">
                                        <button type="button"
                                            class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">
                                            Read More
                                        </button>
                                    </a>
                                    <a href="{{ url('contact') }}" class="ms-2">
                                        <button type="button"
                                            class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">
                                            Contact Us
                                        </button>
                                    </a> --}}
                                </div>
                            </div>

                        </div>
                    @endif
                    @if (!empty($sliderImages[1]))
                        <div class="carousel-item">
                            <img src="{{ $sliderImages[1]->getImageSingle($sliderImages[1]->id)->getImageInfo() }}"
                                class="img-fluid" alt="First slide">
                            <div class="carousel-caption">
                                <div class="container carousel-content">
                                    <h6 class="text-secondary h4 animated fadeInUp">
                                        {{-- Best IT Solutions --}}
                                    </h6>
                                    <h1 class="text-white display-1 mb-4 animated fadeInRight">
                                        {{-- {{ $sliderImages[1]->caption }} --}}
                                    </h1>
                                    <p class="mb-4 text-white fs-5 animated fadeInDown">
                                        {{-- {{ Str::of($sliderImages[0]->short_description)->limit(150) }} --}}
                                    </p>
                                    {{-- <a href="{{ url($sliderImages[1]->product_slug) }}" class="me-2">
                                        <button type="button"
                                            class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">
                                            Read More
                                        </button>
                                    </a>
                                    <a href="{{ url('contact') }}" class="ms-2">
                                        <button type="button"
                                            class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">
                                            Contact Us
                                        </button>
                                    </a> --}}
                                </div>
                            </div>

                        </div>
                    @endif

                    @if (!empty($sliderImages[2]))
                        <div class="carousel-item">
                            <img src="{{ $sliderImages[2]->getImageSingle($sliderImages[2]->id)->getImageInfo() }}"
                                class="img-fluid" alt="First slide">
                            <div class="carousel-caption">
                                <div class="container carousel-content">
                                    <h6 class="text-secondary h4 animated fadeInUp">
                                        {{-- Best IT Solutions --}}
                                    </h6>
                                    <h1 class="text-white display-1 mb-4 animated fadeInRight">
                                        {{-- {{ $sliderImages[2]->caption }} --}}
                                    </h1>
                                    <p class="mb-4 text-white fs-5 animated fadeInDown">
                                        {{-- {{ Str::of($sliderImages[0]->short_description)->limit(150) }} --}}
                                    </p>
                                    {{-- <a href="{{ url($sliderImages[2]->product_slug) }}" class="me-2">
                                        <button type="button"
                                            class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">
                                            Read More
                                        </button>
                                    </a>
                                    <a href="{{ url('contact') }}" class="ms-2">
                                        <button type="button"
                                            class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">
                                            Contact Us
                                        </button> --}}
                                    </a>
                                </div>
                            </div>

                        </div>
                    @endif

                    @if (!empty($sliderImages[3]))
                        <div class="carousel-item">
                            <img src="{{ $sliderImages[3]->getImageSingle($sliderImages[3]->id)->getImageInfo() }}"
                                class="img-fluid" alt="First slide">
                            <div class="carousel-caption">
                                <div class="container carousel-content">
                                    <h6 class="text-secondary h4 animated fadeInUp">
                                        {{-- Best IT Solutions --}}
                                    </h6>
                                    <h1 class="text-white display-1 mb-4 animated fadeInRight">
                                        {{-- {{ $sliderImages[3]->caption }} --}}
                                    </h1>
                                    <p class="mb-4 text-white fs-5 animated fadeInDown">
                                        {{-- {{ Str::of($sliderImages[0]->short_description)->limit(150) }} --}}
                                    </p>
                                    {{-- <a href="{{ url($sliderImages[3]->product_slug) }}" class="me-2">
                                        <button type="button"
                                            class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">
                                            Read More
                                        </button>
                                    </a>
                                    <a href="{{ url('contact') }}" class="ms-2">
                                        <button type="button"
                                            class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">
                                            Contact Us
                                        </button> --}}
                                    </a>
                                </div>
                            </div>

                        </div>
                    @endif

                    @if (!empty($sliderImages[4]))
                        <div class="carousel-item">
                            <img src="{{ $sliderImages[4]->getImageSingle($sliderImages[4]->id)->getImageInfo() }}"
                                class="img-fluid" alt="First slide">
                            <div class="carousel-caption">
                                <div class="container carousel-content">
                                    <h6 class="text-secondary h4 animated fadeInUp">
                                        {{-- Best IT Solutions --}}
                                    </h6>
                                    <h1 class="text-white display-1 mb-4 animated fadeInRight">
                                        {{-- {{ $sliderImages[4]->caption }} --}}
                                    </h1>
                                    <p class="mb-4 text-white fs-5 animated fadeInDown">
                                        {{-- {{ $sliderImages[4]->short_description }} --}}
                                    </p>
                                    {{-- <a href="{{ url($sliderImages[4]->product_slug) }}" class="me-2">
                                        <button type="button"
                                            class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">
                                            Read More
                                        </button>
                                    </a>
                                    <a href="{{ url('contact') }}" class="ms-2">
                                        <button type="button"
                                            class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">
                                            Contact Us
                                        </button>
                                    </a> --}}
                                </div>
                            </div>

                        </div>
                    @endif

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    @endif

    @include($version.'_facts')

    @include($version.'_about_intro')




    <div class="container-fluid services py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Core Value</h5>
                <h1>Services Built Specifically For Your Business</h1>
            </div>
            <div class="row g-5 services-inner">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-tools fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Creative Design Aproach</h4>
                                <p class="mb-4">
                                    Make your signage dreams come to life! We're excited to embark on this creative journey
                                    with you and bring your vision to reality. You give us the task, we do everthing you
                                    need.
                                </p>
                                <a href="{{ url('services') }}"
                                    class="btn btn-secondary text-white px-5 py-3 rounded-pill">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-database fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Unparalleled Craftsmanship</h4>
                                <p class="mb-4">
                                    Crafting exceptional signage isn't just a job for us; it's our passion and our craft. We
                                    understand that every sign we create is a reflection of your brand and a vital component
                                    of your visual identity.
                                </p>
                                <a href="{{ url('services') }}"
                                    class="btn btn-secondary text-white px-5 py-3 rounded-pill">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-award fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Dedication to Excellence</h4>
                                <p class="mb-4">
                                    We are commited to achieving the highest standards in all aspects of our work and
                                    endeavors going above and beyond, exceeding expectations, and consistently delivering
                                    exceptional results
                                </p>
                                <a href="{{ url('services') }}"
                                    class="btn btn-secondary text-white px-5 py-3 rounded-pill">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid services py-5 mb-5" style="background: #ededed">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s">
                <h5 class="text-primary">How We Do It</h5>
                <p>
                    At <span class="big-text">{{ config('siteconfig.sitename') }}</span>, we
                    believe in a collaborative approach to creating exceptional signage solutions
                    that meet and exceed our clients' expectations. Our streamlined process ensures clarity, efficiency,
                    and
                    satisfaction at every stage of your signage project.

                </p>
            </div>
            <div class="row g-5 services-inner featured">

                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="list-wrap" data-aos="fade-up">
                        <div class="icon">
                            <i class="fa fa-handshake" aria-hidden="true"></i>
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

                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="list-wrap" data-aos="fade-up">
                        <div class="icon">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
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

                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="list-wrap" data-aos="fade-up">
                        <div class="icon">
                            <i class="fa fa-building" aria-hidden="true"></i>
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

                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="list-wrap" data-aos="fade-up">
                        <div class="icon">
                            <i class="fa fa-toolbox" aria-hidden="true"></i>
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

                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                    <div class="list-wrap" data-aos="fade-up">
                        <div class="icon">
                            <i class="fa fa-check" aria-hidden="true"></i>
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

                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                    <div class="list-wrap" data-aos="fade-up">
                        <div class="icon">
                            <i class="fa fa-smile" aria-hidden="true"></i>
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
    </div>

    @include($version.'_why_us')



    <div class="container-fluid">
        <div class="container">
            <hr>
        </div>
    </div>


    @if (!empty($recent_projects))
        <div class="container-fluid projects py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Our Projects</h5>
                    <h1>Our Recently Completed Projects</h1>
                </div>
                <div class="row g-5">
                    @foreach ($recent_projects as $project)
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ !empty($projectImage)?url($projectImage->getImageInfo()):'' }}" class="img-fluid w-100 rounded"
                                        alt="{{ $project->title }}" style="width: 310px; height:254px;">
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

    <div class="container-fluid team py-5 mb-0">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Team</h5>
                <h1>Meet our expert Team</h1>
            </div>
            <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="assets/v1/front//img/team-1.jpg" class="img-fluid w-100 rounded-circle"
                                    alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="assets/v1/front//img/team-2.jpg" class="img-fluid w-100 rounded-circle"
                                    alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="assets/v1/front//img/team-3.jpg" class="img-fluid w-100 rounded-circle"
                                    alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="assets/v1/front//img/team-4.jpg" class="img-fluid w-100 rounded-circle"
                                    alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="call-to-action" class="container-fluid call-to-action">
        <div class="container text-left aos-init aos-animate" data-aos="zoom-out">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h3>Let's Discuss your Projects</h3>
                </div>
                <div class="col-lg-3 text-right">
                    <a class="default-theme-btn-one" href="mailto:{{ config('siteconfig.contacts.email') }}">Conatct Us
                        <span></span></a>
                </div>
            </div>
        </div>
    </div>

    <div id="clients" class="container-fluid clients">

        <div class="container" data-aos="zoom-out" style="">
            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ url('assets/v1/front//assets/images/clients/c1.png') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/v1/front//assets/images/clients/c2.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/v1/front//assets/images/clients/c3.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/v1/front//assets/images/clients/c4.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/v1/front//assets/images/clients/c5.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/v1/front//assets/images/clients/c6.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/v1/front//assets/images/clients/c7.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/v1/front//assets/images/clients/c8.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/v1/front//assets/images/clients/c9.png" class="img-fluid"
                            alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <script>
        $('.owlslider').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
@endsection
@section('scripts')
    <script type="text/javascript">
        new Swiper('.clients-slider', {
            speed: 400,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            slidesPerView: 'auto',
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 40
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 60
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 80
                },
                992: {
                    slidesPerView: 5,
                    spaceBetween: 60
                }
            }
        });
    </script>
@endsection
