@extends($version.'layouts.app')
@section('styles')
<style type="text/css">
    .my-anchor a:hover,
    .my-anchor {
        text-decoration: underline;
        color: unset;
    }

    .cat-anchor a {
        color: #5F5F65;
    }

    .cat-anchor a:hover {
        text-decoration: underline;
        color: var(--bs-primary);
    }

    .contact-form-3 .form-group {
        margin-bottom: 30px;
    }
</style>
@endsection
@section('content')
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">
            {{ $project->title }}
        </h1>
    </div>
</div>

@include($version.'_facts')

<div class="container mt-4">
    <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb justify-content-left mb-0">
            <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('projects') }}">Projects</a></li>
            <li class="breadcrumb-item">{{ $project->title }} </li>
        </ol>
    </nav>
</div>


<div class="container-fluid projects py-5 mb-5">
    <div class="container">
        <div class="row">
            @php
            $projectImage = $project->getImageSingle($project->id);
            @endphp
            <div class="col-xl-12 col-md-12" data-aos="fade-up">
                <img src="{{ url($projectImage->getImageInfo()) }}" alt="icon" class="mb-25"
                    style="width:100%;max-height: 320px; object-fit:cover">
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-4 center d-flex service-header-skills">
                <p><strong>Project Type: </strong></p>
                <p class="text-primary"> &nbsp;{{ $project->category_name }}</p>
            </div>
            @php
            $projectCategories = App\Models\CategoryModel::getSubCategoriesByParentId($project->id);
            @endphp
            <div class="col-md-8 center d-flex service-header-skills">
                <p><strong>Categories:&nbsp;</strong></p>
                <p class="cat-anchor">
                    @foreach ($projectCategories as $projectCategory)
                    <a href="{{ url($project->category_slug . '/' . $projectCategory->slug) }}"
                        style="">{{ $projectCategory->name }}</a>,
                    @endforeach
                </p>
            </div>
        </div>
        <div class="row pt-3 my-3">
            <div class="col-md-12 center">
                <h2 class="text-primary"><span class="big-text">{{ $project->title }}</span></h2>
                <p>{{ $project->description }}</p>
            </div>
            @if (!empty($project->getImage))
            <div class="col-12">
                <section id="recent-posts" class="recent-posts">
                    <div class="row wportfolio-container" data-layout="fitRows" id="portfolio-2">
                        <h4 class="text-primary"><span class="big-text">{{ $project->title }} Portifolio</span>
                        </h4>
                        @foreach ($project->getImage as $categoryImage)
                        <div class="portfolio-item accessories women col-sm-6 col-md-4 col-lg-3">
                            <div class="portfolio portfolio-overlay">
                                <figure class="portfolio-media">
                                    <a id="filters" href="{{ url($categoryImage->getImageInfo()) }}">
                                        <img src="{{ url($categoryImage->getImageInfo()) }}" alt="item"
                                            class="img-fluid">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
            @endif

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
                <a class="default-theme-btn-one" href="{{ config('siteconfig.contacts.email') }}">Conatct Us
                    <span></span></a>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid projects py-5 mb-5">
    <div class="container">
        <h2>Contact Us</h2>
        <p>We're always happy to hear from you! </p>


        <div class="row">
            <div class="col-lg-6 mb-2 mb-lg-0" style="padding-right:2%">
                <h2 class="title mb-1">Contact Information</h2>
                <p class="mb-3">
                    Welecome to <strong>{{ config('siteconfig.sitename') }}</strong> your number one online
                    stop
                    shop.
                    We value your feedback. Incase of any quaries feel free to contact our customer care
                    through:
                </p>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="contact-info">
                            <h3>Our Shop Contacts</h3>

                            <ul class="contact-list">
                                <li>
                                    <i class="icon-map-marker"></i>
                                    {{ config('siteconfig.contacts.location.name') }}
                                </li>
                                <li>
                                    <i class="icon-phone"></i>
                                    <a href="tel:#">{{ config('siteconfig.contacts.phone') }}</a>
                                </li>
                                <li>
                                    <i class="icon-envelope"></i>
                                    <a
                                        href="mailto:{{ config('siteconfig.contacts.email') }}">{{ config('siteconfig.contacts.email') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="contact-info">
                            <h3>Working Hours</h3>

                            <ul class="contact-list">
                                <li>
                                    <i class="icon-clock-o"></i>
                                    <span class="text-dark">Monday-Saturday</span> <br>8.00am - 8.00pm EAT
                                </li>
                                <li>
                                    <i class="icon-calendar"></i>
                                    <span class="text-dark">Sunday</span> <br>8.00am - 5.00pm EAT
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="title mb-1">Got Any Questions?</h2>
                <p class="mb-2">Use the form below to get in touch with the sales team</p>



                <div class="contact-form-box contact-form contact-form-3">


                    <form action="" method="POST" class="contact-form mb-3">
                        <div class="row">
                            {{ csrf_field() }}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="cname" class="sr-only">Name</label>
                                    <input type="text" name="name"
                                        class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        id="cname" placeholder="Name *" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="cemail" class="sr-only">Email</label>
                                    <input type="email" name="email"
                                        class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        id="cemail" placeholder="Email *" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="cphone" class="sr-only">Phone</label>
                                    <input type="tel" name="phone"
                                        class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                        id="cphone" placeholder="Phone">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="csubject" class="sr-only">Subject</label>
                                    <input type="text" name="subject"
                                        class="form-control {{ $errors->has('subject') ? ' is-invalid' : '' }}"
                                        id="csubject" placeholder="Subject" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cmessage" class="sr-only">Message</label>
                            <textarea name="message" class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" cols="30"
                                rows="4" id="cmessage" placeholder="Message *" required></textarea>
                        </div>
                        <button type="submit" class="default-theme-btn-two" data-text="Send Message">Send
                            Message<span></span></button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
@endsection