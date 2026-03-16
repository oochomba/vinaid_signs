<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo e(!empty($meta_title) ? ucwords($meta_title) . ' | ' : ''); ?> <?php echo e(config('siteconfig.sitename')); ?> </title>
    <?php if(!empty($meta_description)): ?>
    <meta name="description" content="<?php echo e($meta_description); ?>">
    <?php endif; ?>
    <?php if(!empty($meta_keywords)): ?>
    <meta name="keywords" content="<?php echo e($meta_keywords); ?>">
    <?php endif; ?>

    <link href="<?php echo e(url('assets/v1/front/assets/images/favicon.jpeg')); ?>" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Saira:wght@500;600;700&amp;display=swap"
        rel="stylesheet">

    <link href="<?php echo e(url('assets/v1/front/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')); ?>"
        rel="stylesheet">
    <link href="<?php echo e(url('assets/v1/front/cdn.jsdelivr.net/npm/bootstrap-icons1.4.1/font/bootstrap-icons.css')); ?>"
        rel="stylesheet">

    <link href="<?php echo e(url('assets/v1/front/lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/v1/front/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/v1/front/assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('assets/v1/front/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('assets/v1/front/css/style.css')); ?>" rel="stylesheet">

    <style type="text/css">
        :root {
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-primary: #B20515;
            --bs-secondary: #641D23;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #F8F8F9;
            --bs-dark: #000103;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
        }

        .bg-primary {
            background-color: #B20515 !important;
        }

        .bg-secondary {
            background-color: #641D23 !important;
        }

        .text-primary {
            color: #B20515 !important;
        }

        .text-dark {
            color: var(--bs-dark);
        }

        .text-secondary {
            color: #641D23 !important;
        }

        .btn-secondary {
            color: #fff;
            background-color: var(--bs-primary);
            border-color: var(--bs-secondary);
        }

        .btn-secondary:hover {
            color: #000;
            background-color: var(--bs-secondary);
            border-color: var(--bs-secondary);
        }

        .navbar .navbar-nav .nav-link:hover,
        .navbar .navbar-nav .nav-link.active {
            color: var(--bs-dark) !important;
        }

        #note small {
            animation: mymove 20s infinite;
        }

        .call-to-action {
            background: url(../assets/v1/front/assets/images/section-bg.jpg) center left;
            background-size: cover;
            padding: 30px 0px;
            border-radius: 0px;
            overflow: hidden;
            position: relative;
            background-attachment: fixed;
        }

        .call-to-action:before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            /* background: var(--bs-primary); */
            z-index: 0;
            opacity: 0.9;
        }

        .call-to-action h3 {
            color: #fff;
            font-size: 28px;
            margin-bottom: 0;
        }


        .default-theme-btn {
            position: relative;
            z-index: 1;
            overflow: hidden;
            color: #ffffff;
            font-size: 15px;
            font-weight: 600;
            text-align: center;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 12px;
            padding-bottom: 12px;
            border-radius: 5px;
            display: inline-block;
            background-color: #c00113;
            box-shadow: 0 7px 25px rgb(192 1 19 / 27%);
            -webkit-transition: 0.4s;
            transition: 0.4s;
            border: none;
        }

        .default-theme-btn span {
            position: absolute;
            z-index: -1;
            width: 0;
            height: 0;
            display: block;
            border-radius: 30px;
            background-color: #a00311;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: width 0.5s ease-in-out, height 0.5s ease-in-out;
            transition: width 0.5s ease-in-out, height 0.5s ease-in-out;
        }

        .default-theme-btn:hover,
        .default-theme-btn:focus {
            color: #ffffff;
        }

        .default-theme-btn:hover span,
        .default-theme-btn:focus span {
            width: 200%;
            height: 500px;
        }

        .default-theme-btn-one {
            position: relative;
            z-index: 1;
            overflow: hidden;
            color: #c00113;
            font-size: 15px;
            font-weight: 600;
            padding-top: 12px;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 12px;
            border-radius: 30px;
            text-align: center;
            display: inline-block;
            background-color: #ffffff;
            box-shadow: 0 7px 25px rgb(192 1 19 / 27%);
            -webkit-transition: 0.4s;
            transition: 0.4s;
            border: none;
            margin-top: 5px;
            margin-right: 20px;
        }

        .default-theme-btn-one span {
            position: absolute;
            z-index: -1;
            width: 0;
            height: 0;
            display: block;
            border-radius: 30px;
            background-color: #a00311;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: width 0.5s ease-in-out, height 0.5s ease-in-out;
            transition: width 0.5s ease-in-out, height 0.5s ease-in-out;
        }

        .default-theme-btn-one:hover,
        .default-theme-btn-one:focus {
            color: #ffffff;
        }

        .default-theme-btn-one:hover span,
        .default-theme-btn-one:focus span {
            width: 200%;
            height: 500px;
        }

        .default-theme-btn-two {
            position: relative;
            z-index: 1;
            overflow: hidden;
            color: #ffffff;
            font-weight: 600;
            font-size: 15px;
            padding-top: 12px;
            padding-left: 40px;
            padding-right: 40px;
            padding-bottom: 12px;
            text-align: center;
            border-radius: 30px;
            display: inline-block;
            background-color: #a00311;
            box-shadow: 0 7px 25px rgb(192 1 19 / 27%);
            -webkit-transition: 0.4s;
            transition: 0.4s;
            border: none;
            margin-top: 5px;
            margin-right: 20px;
        }

        .default-theme-btn-two span {
            position: absolute;
            z-index: -1;
            width: 0;
            height: 0;
            display: block;
            border-radius: 30px;
            background-color: var(--bs-secondary);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: width 0.5s ease-in-out, height 0.5s ease-in-out;
            transition: width 0.5s ease-in-out, height 0.5s ease-in-out;
        }

        .default-theme-btn-two:hover,
        .default-theme-btn-two:focus {
            color: var(--bs-white);
        }

        .default-theme-btn-two:hover span,
        .default-theme-btn-two:focus span {
            width: 200%;
            height: 500px;
        }

        .contact-form {
            background: unset;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            content: "/";
        }
    </style>
    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>
    <div id="spinner"
        class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>

    <div class="container-fluid bg-dark py-2 d-none d-md-flex">
        <div class="container">
            <div class="d-flex justify-content-between topbar">
                <div class="top-info">
                    <small class="me-3 text-white-50"><a href="javascript:;"><i
                                class="fas fa-map-marker-alt me-2 text-primary"></i></a><?php echo e(config('siteconfig.contacts.location.name')); ?>

                    </small>
                    <small class="me-3 text-white-50"><a href="mailto:<?php echo e(config('siteconfig.contacts.email')); ?>">
                            <i
                                class="fas fa-envelope me-2 text-primary"></i></a><?php echo e(config('siteconfig.contacts.email')); ?></small>
                </div>
                <div id="note" class="text-primary d-none d-xl-flex">
                    <small style="color: #26d48c">
                        Welcome to <?php echo e(config('siteconfig.sitename')); ?> Where creativity meets visibility!
                    </small>
                </div>
                <div class="top-link">
                    <a href="<?php echo e(config('siteconfig.social.fb')); ?>"
                        class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                            class="fab fa-facebook-f text-primary"></i></a>
                    <a href="<?php echo e(config('siteconfig.social.twitter')); ?>"
                        class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                            class="fab fa-twitter text-primary"></i></a>
                    <a href="<?php echo e(config('siteconfig.social.instagram')); ?>"
                        class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                            class="fab fa-instagram text-primary"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="<?php echo e(url('')); ?>" class="navbar-brand">
                    <h1 class="text-white fw-bold d-block">
                        <img src="<?php echo e(url('assets/v1/front/assets/images/logoheader.png')); ?>" alt="logo">
                    </h1>
                    
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                    <div class="navbar-nav ms-auto mx-xl-auto p-0">
                        <a href="<?php echo e(url('')); ?>"
                            class="nav-item nav-link <?php echo e(Request::segment(1) == '' ? 'active' : ''); ?>">Home</a>
                        <a href="<?php echo e(url('about')); ?>"
                            class="nav-item nav-link <?php echo e(Request::segment(1) == 'about' ? 'active' : ''); ?>">About</a>

                        <div class="nav-item dropdown">
                            <a href="<?php echo e(url('services')); ?>"
                                class="nav-link <?php echo e(Request::segment(1) == 'services' ? 'active' : ''); ?> dropdown-toggle"
                                data-bs-toggle="dropdown">Services</a>
                            <?php if(!empty($rootCategories)): ?>
                            <div class="dropdown-menu rounded">
                                <?php $__currentLoopData = $rootCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(url($service->slug)); ?>"
                                    class="dropdown-item"><?php echo e($service->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo e(url('projects')); ?>"
                            class="nav-item nav-link <?php echo e(Request::segment(1) == 'projects' ? 'active' : ''); ?>">Projects</a>
                        <a href="javascript:;"
                            class="nav-item nav-link <?php echo e(Request::segment(1) == 'blog' ? 'active' : ''); ?>">Blog</a>
                        <a href="<?php echo e(url('contact')); ?>"
                            class="nav-item nav-link <?php echo e(Request::segment(1) == 'contact' ? 'active' : ''); ?>">Contact</a>
                    </div>
                </div>
                <div class="d-none d-xl-flex flex-shirink-0">
                    <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                        <a href="#" class="position-relative animated tada infinite">
                            <i class="fa fa-phone-alt text-white fa-2x"></i>
                            <div class="position-absolute" style="top: -7px; left: 20px;">
                                <span><i class="fa fa-comment-dots text-dark"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex flex-column pe-4 border-end">
                        <span class="text-white-50">Have any questions?</span>
                        <span class="text-dark">Call: <?php echo e(config('siteconfig.contacts.phone')); ?></span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center ms-4 ">
                        <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <?php echo $__env->yieldContent('content'); ?>

    <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
        <div class="container pt-5 pb-4">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="<?php echo e(url('')); ?>">
                        <h1 class="text-white fw-bold d-block">
                            <img src="<?php echo e(url('assets/v1/front/assets/images/logofooter.png')); ?>" alt="logo">
                        </h1>
                        
                    </a>
                    <p class="mt-4 text-light">
                        At <?php echo e(config('siteconfig.sitename')); ?> we are passionate about providing businesses
                        higly customized signage solution that portray your business brand.
                    </p>
                    <div class="d-flex hightech-link">
                        <a href="<?php echo e(config('siteconfig.social.fb')); ?>"
                            class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                class="fab fa-facebook-f text-primary"></i></a>
                        <a href="<?php echo e(config('siteconfig.social.twitter')); ?>"
                            class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                class="fab fa-twitter text-primary"></i></a>
                        <a href="<?php echo e(config('siteconfig.social.instagram')); ?>"
                            class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                class="fab fa-instagram text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-primary">Short Link</a>
                    <div class="mt-4 d-flex flex-column short-link">
                        <a href="<?php echo e(url('about')); ?>" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                        <a href="<?php echo e(url('contact')); ?>" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
                        <a href="<?php echo e(url('services')); ?>" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Our Services</a>
                        <a href="<?php echo e(url('projects')); ?>" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Our Projects</a>
                        <a href="javascript:;" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Latest Blog</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-primary">Help Link</a>
                    <div class="mt-4 d-flex flex-column help-link">
                        <a href="<?php echo e(url('terms-conditions')); ?>" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Terms and Conditions</a>
                        <a href="<?php echo e(url('privacy-policy')); ?>" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Privacy Policy</a>
                        <a href="<?php echo e(url('faq')); ?>" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>FAQs</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-primary">Contact Us</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="javascript:;" class="pb-3 text-light border-bottom border-primary"><i
                                class="fas fa-map-marker-alt text-secondary me-2"></i>
                            <?php echo e(config('siteconfig.contacts.location.name')); ?></a>
                        <a href="tel:<?php echo e(config('siteconfig.contacts.phone')); ?>"
                            class="py-3 text-light border-bottom border-primary"><i
                                class="fas fa-phone-alt text-secondary me-2"></i>
                            <?php echo e(config('siteconfig.contacts.phone')); ?></a>
                        <a href="mailto:<?php echo e(config('siteconfig.contacts.email')); ?>"
                            class="py-3 text-light border-bottom border-primary"><i
                                class="fas fa-envelope text-secondary me-2"></i>
                            <?php echo e(config('siteconfig.contacts.email')); ?></a>
                    </div>
                </div>
            </div>
            <hr class="text-light mt-5 mb-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <span class="text-light">© <?php echo e(date('Y')); ?>. <a href="#"
                            class="text-primary"><?php echo e(config('siteconfig.sitename')); ?></a>.
                        All right reserved.
                    </span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <span class="text-light">Designed By<a href="tel:" class="text-primary">
                            +254 790 849746
                    </span>
                </div>
            </div>
        </div>
    </div>


    <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top">
        <i class="fa fa-arrow-up text-white"></i>
    </a>


    <script src="<?php echo e(url('assets/v1/front/ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/v1/front/cdn.jsdelivr.net/npm/bootstrap5.0.0/dist/js//bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/v1/front/lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/v1/front/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/v1/front/lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/v1/front/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/v1/front/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>

    <script src="<?php echo e(url('assets/v1/front/js/main.js')); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>
    <script>
        var elem = document.querySelector('.m-p-g');
        document.addEventListener('DOMContentLoaded', function() {
            var gallery = new MaterialPhotoGallery(elem);
        });
    </script>
</body>

</html><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/v1/layouts/app.blade.php ENDPATH**/ ?>