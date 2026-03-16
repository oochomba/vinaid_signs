<?php $__env->startSection('styles'); ?>
    <style type="text/css">
        .my-anchor a {
            color: var(--bs-primary);
        }

        .my-anchor a:hover {
            text-decoration: underline;
            color: var(--bs-secondary);
        }

        .portfolio-nav ul {
            list-style: none;
        }

        .nav-filter {
            display: flex;
            margin-bottom: 3rem
        }

        .nav-filter a {
            display: inline-block;
            color: #777;
            padding: .4rem 1rem;
            font-weight: 400;
            /* font-size: 1.4rem; */
            line-height: 1.5;
            letter-spacing: -.01em;
            text-transform: uppercase;
            border-bottom: .1rem solid transparent
        }

        .nav-filter a:hover,
        .nav-filter a:focus {
            color: var(--color-primary);
        }

        .nav-filter .active a {
            color: var(--color-primary);
            border-bottom-color: var(--color-primary);
        }

        .portfolio-container {
            position: relative;
            margin: 0 -1rem 4rem;
            transition: height .4s
        }

        .portfolio-container::after {
            display: block;
            clear: both;
            content: ''
        }

        .portfolio-nogap {
            margin-left: 0;
            margin-right: 0;
            margin-bottom: 1rem
        }

        .portfolio-nogap .col,
        .portfolio-nogap [class*=col-] {
            padding-left: 0;
            padding-right: 0
        }

        .portfolio-nogap .portfolio-item {
            margin-bottom: 0
        }

        .portfolio-item {
            float: left;
            margin-bottom: 2rem
        }

        .portfolio {
            position: relative
        }

        .portfolio-media {
            background-color: #ccc;
            margin: 0
        }

        .portfolio-media>a {
            position: relative;
            display: block;
            overflow: hidden;
            outline: none !important
        }

        .portfolio-media>a:after {
            content: '';
            display: block;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 1;
            background-color: #444444;
            visibility: hidden;
            opacity: 0;
            transition: all 0.45s ease
        }

        .portfolio-media img {
            display: block;
            max-width: none;
            width: 100%;
            height: auto;
            width: 270px;
            height: 230px;
            object-fit: cover;
        }

        .portfolio-item:hover .portfolio-media>a:after {
            visibility: visible;
            opacity: .4
        }

        .portfolio-item:hover .portfolio-content {
            background-color: #f6f6f6
        }

        .portfolio-content {
            padding: 1.6rem 2rem;
            transition: all 0.45s ease
        }

        .portfolio-title {
            color: #333;
            font-weight: 400;
            font-size: 1.3rem;
            line-height: 1.3rem !important;
            letter-spacing: -.01em;
            margin-bottom: .1rem
        }

        .portfolio-title a {
            color: inherit;
            font-size: 1.1rem;
        }

        .portfolio-title a:hover,
        .portfolio-title a:focus {
            color: var(--color-primary);
        }

        .portfolio-tags {
            font-weight: 300;
            font-size: 1rem !important;
            letter-spacing: -.01em
        }

        .portfolio-tags a {
            color: var(--color-primary);
            ;
            transition: all .35s ease
        }

        .portfolio-tags a:hover,
        .portfolio-tags a:focus {
            color: var(--color-primary);
            ;
            box-shadow: 0 1px 0 var(--color-primary);
        }

        .portfolio-overlay {
            overflow: hidden;
            padding: 10px;
        }

        .portfolio-overlay .portfolio-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem 3rem;
            opacity: 0;
            z-index: 2;
            visibility: hidden;
            -webkit-backface-visibility: hidden
        }

        .portfolio-overlay .portfolio-content.portfolio-content-center {
            bottom: auto;
            top: 50%;
            text-align: center;
            transform: translateY(-50%);
            -ms-transform: translateY(-50%)
        }

        .portfolio-overlay .portfolio-title {
            color: #fff
        }

        .portfolio-overlay .portfolio-title a:hover,
        .portfolio-overlay .portfolio-title a:focus {
            color: #f1f1f1
        }

        .portfolio-overlay .portfolio-tags a {
            color: #ccc
        }

        .portfolio-overlay .portfolio-tags a:hover,
        .portfolio-overlay .portfolio-tags a:focus {
            color: #fff;
            box-shadow: 0 1px 0 #fff
        }

        .portfolio-overlay:hover .portfolio-content {
            visibility: visible;
            opacity: 1;
            background-color: transparent
        }

        @media screen and (max-width: 575px) {
            .nav-filter {
                flex-wrap: wrap;
                justify-content: center
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container-fluid page-header py-5" style="">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">
                <?php echo e($category->name); ?>

                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(url('services')); ?>">Services</a></li>
                        <?php if(!empty($root_category)): ?>
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(url($root_category->slug)); ?>"><?php echo e($root_category->name); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(!empty($sub_root_category)): ?>
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(url($root_category->slug . '/' . $sub_root_category->slug)); ?>">
                                    <?php echo e($sub_root_category->name); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="breadcrumb-item">
                            <?php echo e($category->name); ?>

                        </li>
                    </ol>
                </nav>
            </h1>
        </div>
    </div>

    <?php echo $__env->make($version.'_facts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php
        $serviceImage = $category->getImageSingle($category->id);
    ?>
    <div class="container-fluid services pt-0">
        <div class="container py-5">
            <div class="pb-1 wow fadeIn" data-wow-delay=".3s">
                <h2 class="text-primary"><?php echo e($category->name); ?></h5>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if(!empty($category->description)): ?>
                        <?php echo $category->description; ?>

                    <?php endif; ?>
                    <?php
                        $subCategories = App\Models\CategoryModel::getSubCategoriesByParentId($category->id);
                    ?>
                    <?php if(!empty($subCategories->count())): ?>
                        <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h3 class="small-text my-anchor pt-2 pb-1">
                                <?php echo e($loop->iteration . '. '); ?> <a
                                    href="<?php echo e($category->slug . '/' . $subCategory->slug); ?>"><?php echo e($subCategory->name); ?></a>
                            </h3>
                            <?php if(!empty($subCategory->description)): ?>
                                <?php echo $subCategory->description; ?>

                            <?php endif; ?>

                            <?php if(!empty($subCategory->children->count())): ?>
                                <section id="recent-posts" class="recent-posts">
                                    <div class="row gy-4">
                                        <?php $__currentLoopData = $subCategory->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-lg-4">
                                                <article>
                                                    <div class="post-img">
                                                        <?php
                                                            $childrenImage = $children->getImageSingle($children->id);
                                                        ?>
                                                        <a href="<?php echo e(url($serviceImage->getImageInfo())); ?>">
                                                            <img src="<?php echo e(url($serviceImage->getImageInfo())); ?>"
                                                                alt="<?php echo e($children->name); ?>" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <h5 class="pt-1">
                                                        <a
                                                            href="<?php echo e(url($category->slug . '/' . $subCategory->slug . '/' . $children->slug)); ?>"><?php echo e($children->name); ?></a>
                                                    </h5>

                                                    <?php if(!empty($children->description)): ?>
                                                        <p class="text-4-line">
                                                            <?php echo $children->description; ?>

                                                        </p>
                                                    <?php endif; ?>
                                                    <p class="my-anchor">
                                                        <a
                                                            href="<?php echo e(url($category->slug . '/' . $subCategory->slug . '/' . $children->slug)); ?>">
                                                            Read More...
                                                        </a>
                                                    </p>

                                                </article>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </section>
                            <?php else: ?>
                                <?php
                                    $subCategoryImages = $subCategory->getImage;
                                ?>

                                <?php if(!empty($subCategoryImages->count())): ?>
                                    <div class="portfolio-container" data-layout="fitRows" id="portfolio-2">
                                        <?php $__currentLoopData = $subCategoryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategoryImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="portfolio-item accessories women col-sm-6 col-md-4 col-lg-3">
                                                <div class="portfolio portfolio-overlay">
                                                    <figure class="portfolio-media">
                                                        <a href="<?php echo e(url($subCategoryImage->getImageInfo())); ?>">
                                                            <img src="<?php echo e(url($subCategoryImage->getImageInfo())); ?>"
                                                                alt="item">
                                                        </a>
                                                    </figure>
                                                    <div class="portfolio-content">
                                                        <h3 class="portfolio-title"><a
                                                                href="<?php echo e($category->slug . '/' . $subCategory->slug); ?>"><?php echo e($subCategory->name); ?></a>
                                                        </h3>
                                                        <div class="portfolio-tags">
                                                            <a href="<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <?php
                            $categoryImages = $category->getImage;
                        ?>
                        
                        <?php if(!empty($categoryImages->count())): ?>
                            <div class="border-top mt-4">
                                <h3 class="title text-center big-text pt-2 pb-2"><?php echo e($category->name); ?> Portfolio</h3>
                            </div>
                            <div class="portfolio-container" data-layout="fitRows" id="portfolio-2">
                                <?php $__currentLoopData = $categoryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php if(!empty($categoryImage->getImageInfo())): ?>

                                    <div class="portfolio-item accessories women col-sm-6 col-md-4 col-lg-3">
                                        <div class="portfolio portfolio-overlay">
                                            <figure class="portfolio-media">
                                                <a id="filters" href="<?php echo e(url($categoryImage->getImageInfo())); ?>">
                                                    <img src="<?php echo e(url($categoryImage->getImageInfo())); ?>" alt="item">
                                                </a>
                                            </figure>
                                            <div class="portfolio-content">
                                                <h3 class="portfolio-title"><a
                                                        href="<?php echo e($category->slug); ?>"><?php echo e($categoryImage->name); ?></a>
                                                </h3>
                                                <div class="portfolio-tags">
                                                    <a href="<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('assets/front/assets/javascripts/jquery.waypoints.min.js')); ?>"></script>

    <script src="<?php echo e(url('assets/front/assets/javascripts/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/front/assets/javascripts/isotope.pkgd.min.js')); ?>"></script>
    <script type="text/javascript">
        // Masonry / Grid layout fnction
        function layoutInit(container, selector) {
            $(container).each(function() {
                var $this = $(this);

                $this.isotope({
                    itemSelector: selector,
                    layoutMode: ($this.data('layout') ? $this.data('layout') : 'masonry')
                });
            });
        }

        function isotopeFilter(filterNav, container) {
            $(filterNav).find('a').on('click', function(e) {
                var $this = $(this),
                    filter = $this.attr('data-filter');
                $(filterNav).find('.active').removeClass('active');

                $(container).isotope({
                    filter: filter,
                    transitionDuration: '0.7s'
                });

                $this.closest('li').addClass('active');
                e.preventDefault();
            });
        }

        if (typeof imagesLoaded === 'function' && $.fn.isotope) {
            $('.portfolio-container').imagesLoaded(function() {
                layoutInit('.portfolio-container', '.portfolio-item');
                isotopeFilter('.portfolio-filter', '.portfolio-container');
            });

            $('.entry-container').imagesLoaded(function() {
                layoutInit('.entry-container', '.entry-item');
                isotopeFilter('.entry-filter', '.entry-container');
            });

            $('.product-gallery-masonry').imagesLoaded(function() {
                layoutInit('.product-gallery-masonry', '.product-gallery-item');
            });

            $('.products-container').imagesLoaded(function() {
                layoutInit('.products-container', '.product-item');
                isotopeFilter('.product-filter', '.products-container');
            });
        }

        $(".fancybox").fancybox();

        // Isotope Filtering 
        $('#filters a').on("click", function() {
            var selector = $(this).attr('data-option-value');

            $('.masonry').isotope({
                filter: selector
            }, function() {
                if (selector == "*") {
                    $(".fancybox").attr("data-fancybox-group", "gallery");
                } else {
                    $(selector).find(".fancybox").attr("data-fancybox-group", selector);
                }
                return false;
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/v1/product/index.blade.php ENDPATH**/ ?>