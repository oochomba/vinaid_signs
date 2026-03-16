
<?php $__env->startSection('content'); ?>
<!-- Page Title -->
<section class="page-title">
    <div class="auto-container">
        <!-- Icons Box -->
        <div class="icons-box parallax-scene-1">
            <div class="icon-one" data-depth="0.10"></div>
            <div class="icon-two" data-depth="0.30">
                <img src="<?php echo e(url('assets/v2/images/icons/vector-9.png')); ?>" alt="" />
            </div>
            <div class="icon-three" data-depth="0.30">
                <img src="<?php echo e(url('assets/v2/images/icons/vector-34.png')); ?>" alt="" />
            </div>
            <div class="icon-four" data-depth="0.10"></div>
        </div>
        <h2>About Us</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="<?php echo e(url('')); ?>">Home</a></li>
            <li>About Us</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->


<!-- Business Section -->
<section class="business-section">
    <div class="small-circle-layer"></div>
    <div class="vector-layer-one" style="background-image: url(assets/v2/images/icons/vector-1.png)"></div>
    <div class="vector-layer-two" style="background-image: url(assets/v2/images/icons/vector-2.png)"></div>
    <div class="vector-layer-three" style="background-image: url(assets/v2/images/icons/vector-5.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <div class="content-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="title">Welcome to <?php echo e($setting->website_name); ?></div>
                        <h2>Where <span>Creativity Meets</span> <br> Visibility</h2>
                        <div class="text">
                            We specialize in<span class="big-text"> Crafting Bespoke Signage Solutions </span>
                            that make your brand stand out in the crowd. Whether you need eye-catching outdoor signs,
                            captivating indoor displays, or attention-grabbing vehicle wraps, we've got you covered.
                            Explore our <a href="<?php echo e(url('portfolio')); ?>">Portfolio</a> and let's bring your brand vision to
                            life!
                        </div>
                        <div class="row clearfix mt-3">
                            <h4>Our Key Aspects</h4>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12 mt-2">
                                <div class="inner-box">
                                    <span class="icon flaticon-tools"></span>
                                    <h6>Creative Design Aproach</h6>
                                    <div class="feature-text">
                                        Make your signage dreams come to life! We're excited to embark on this creative
                                        journey with you and bring your vision to reality. You give us the task, we do everthing you need.
                                    </div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12 mt-2">
                                <div class="inner-box">
                                    <span class="icon flaticon-id-card"></span>
                                    <h6>Unparalleled Craftsmanship</h6>
                                    <div class="feature-text">
                                        Crafting exceptional signage isn't just a job for us; it's our passion and our craft.
                                        We understand that every sign we create is a reflection of your brand and a vital component
                                        of your visual identity.
                                    </div>
                                </div>
                            </div>
                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12 mt-2">
                                <div class="inner-box">
                                    <span class="icon flaticon-brand-awareness"></span>
                                    <h6>Dedication to Excellence</h6>
                                    <div class="feature-text">
                                        We are commited to achieving the highest standards in all aspects of our work and
                                        endeavors going above and beyond, exceeding expectations, and consistently
                                        delivering exceptional results
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make($version.'_what_we_do', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


</section>
<!-- End Business Section -->

<?php echo $__env->make($version.'_why_us', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>




<!-- Project Section Four -->
<section class="project-section-four">
    <div class="color-two"></div>
    <div class="pattern-layer-one" style="background-image: url(images/background/pattern-24.png)"></div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <!-- Sec Title -->
                <div>
                    <div class="title style-five">About printing Service</div>
                    <h2>Produce <span>Stuning Printing</span><br> For Your Business</h2>
                </div>
                <div class="button-box">
                    <a href="<?php echo e(url('portfolio')); ?>" class="theme-btn btn-style-one clearfix">
                        <span class="btn-wrap">
                            <span class="text-one">Our Portfolio</span>
                            <span class="text-two">Our Portfolio</span>
                        </span>
                        <span class="icon flaticon-right-arrow"></span>
                    </a>
                </div>

                <div class="text">
                    “At <?php echo e($setting->website_name); ?>, we create eye-catching signage, high-quality <br>
                    printing and memorable branding design that help your business stand out. From <br>
                    shopfront signs and banners to business cards and vehicle wraps, our creative team <br>
                    handles everything — concept, design, print and installation.”
                </div>
            </div>
        </div>

        <!--Isotope Galery-->

        <?php if(!empty($galleryImages)): ?>
        <?php
        $myClasses=['col-lg-6','col-lg-3']
        ?>
        <div class="sortable-masonry">
            <div class="items-container row clearfix">
                <?php echo $__env->make($version.'portfolio._portfolio',['galleryImages'=>$galleryImages,'myClasses'=>$myClasses], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        </div>

        <?php endif; ?>


    </div>
</section>
<!-- End Project Section Four -->

<!-- Brand Section Two -->
<section class="brand-section-two">
    <div class="outer-container">
        <marquee width="100%" direction="left" height="30%">
            <span><a href="#">Signage. <strong>Printing</strong>. Branding. <strong>Design</strong> </a></span>
            <i><img src="assets/v2/images/icons/shape.png" alt="" /></i>
            <span><a href="#">Signage. <strong>Printing</strong>. Branding. <strong>Design</strong> </a></span>
            <i><img src="assets/v2/images/icons/shape.png" alt="" /></i>
            <span><a href="#">Signage. <strong>Printing</strong>. Branding. <strong>Design</strong></a></span>
            <i><img src="images/icons/shape.png" alt="" /></i>
            <span><a href="#">Signage. <strong>Printing</strong>. Branding. <strong>Design</strong></a></span>
            <i><img src="assets/v2/images/icons/shape.png" alt="" /></i>
            <span><a href="#">Signage. <strong>Printing</strong>. Branding. <strong>Design</strong></a></span>
            <i><img src="assets/v2/images/icons/shape.png" alt="" /></i>
        </marquee>
    </div>
</section>
<!-- End Brand Section Two -->


<!-- Testimonial Section -->
<?php echo $__env->make($version.'_testimonial', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- End Testimonial Section -->


<!-- Faq Section -->
<?php echo $__env->make($version.'_faq', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- End Faq Section -->

<!-- Brand Section -->
<?php echo $__env->make($version.'_brand', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- End Brand Section -->

<!-- Project Section Two -->
<section class="project-section-two">
    <div class="auto-container">
        <!-- Lower Box -->
        <div class="lower-box">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <!-- Info Box -->
                <div class="info-box">
                    <div class="title">Printing Projects</div>
                    <h5>For Collaboration ?</h5>
                </div>
                <!-- Info Box -->
                <div class="info-box">
                    <div class="title">Looking For Office</div>
                    <h5>Our Office Address</h5>
                </div>
                <!-- Info Box -->
                <div class="info-box d-flex">

                    <a href="javascript:;" class="lightbox-video play-box"><span class="fa fa-play"></span><i class="ripple"></i></a>

                    <!-- Button Box -->
                    <div class="button-box">
                        <a href="<?php echo e(url('contact')); ?>" class="theme-btn btn-style-one clearfix">
                            <span class="btn-wrap">
                                <span class="text-one">Ask For Qoute</span>
                                <span class="text-two">Ask For Qoute</span>
                            </span>
                            <span class="icon flaticon-right-arrow"></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Lower Box -->
    </div>
</section>
<!-- End Project Section Two -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/v2/about.blade.php ENDPATH**/ ?>