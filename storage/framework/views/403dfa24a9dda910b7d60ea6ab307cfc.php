
<?php $__env->startSection('content'); ?>

<!-- Main Section -->
<?php if(!empty($sliderImages)): ?>

<section class="main-slider">
    <div class="main-slider-carousel owl-carousel owl-theme">
        <?php $__currentLoopData = $sliderImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sliderImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="slide">
            <!-- Ct Dot Animated -->
            <div class="ct-dot-animated">
                <div class="ct-dot-container">
                    <div class="ct-dot-item">
                        <span></span>
                    </div>
                    <div class="ct-dot-item">
                        <span></span>
                    </div>
                    <div class="ct-dot-item">
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- End Ct Dot Animated -->

            <div class="image-layer" style="background-image: url('<?php echo e(!empty($sliderImage->getImageSingle($sliderImage->id))? $sliderImage->getImageSingle($sliderImage->id)->getImageInfo():''); ?>')"></div>
            <div class="vector-icon" style="background-image: url(assets/v2/images/main-slider/vector-2.png)"></div>
            <div class="vector-icon-two" style="background-image: url(assets/v2/images/main-slider/vector-2.png)"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="vector-layer titlt" data-tilt data-tilt-max="6" style="background-image: url(assets/v2/images/main-slider/vector-1.png)"></div>
                            <?php if(!empty($sliderImage->product_id)): ?>
                            <div class="title"><?php echo e($sliderImage->product_id); ?></div>
                            <?php endif; ?>

                            <?php if(!empty($sliderImage->caption)): ?>

                            <h1><?php echo $sliderImage->caption; ?></h1>
                            <?php endif; ?>
                            <?php if($sliderImage->short_description): ?>
                            <div class="text"><?php echo e(Str::of($sliderImage->short_description)->limit(150)); ?></div>
                            <?php endif; ?>
                            <div class="options-box d-flex align-items-center">
                                <!-- Button Box -->
                                <div class="button-box">
                                    <a href="<?php echo e(url('contact')); ?>" class="theme-btn btn-style-one clearfix">
                                        <span class="btn-wrap">
                                            <span class="text-one">Get quote now</span>
                                            <span class="text-two">Get quote now</span>
                                        </span>
                                        <span class="icon flaticon-right-arrow"></span>
                                    </a>
                                </div>

                                <!--TODO add video in future-->
                                <a href="javascript:void(0)" class="lightbox-video play-box"><span class="fa fa-play"></span><i class="ripple"></i></a>
                                <!--End TODO-->

                            </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="<?php echo e(url('assets/v2/images/main-slider/image-1.png')); ?>" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>

    <!-- Social Box -->
    <ul class="social-box">
        <?php if(!empty($setting->twitter_link)): ?>
        <li><a href="<?php echo e($setting->twitter_link); ?>">Twitter</a></li>
        <?php endif; ?>
        <?php if(!empty($setting->facebook_link)): ?>
        <li><a href="<?php echo e($setting->facebook_link); ?>">Facebook</a></li>
        <?php endif; ?>
        <?php if(!empty($setting->instagram_link)): ?>
        <li><a href="<?php echo e($setting->instagram_link); ?>">Instagram</a></li>
        <?php endif; ?>
    </ul>
    <!-- End Social Box -->

    <!-- Email Box -->

    <div class="email-box">
        <?php if(!empty($setting->email)): ?>
        <a href="mailto:<?php echo e($setting->email); ?>"><?php echo e($setting->email); ?></a>
        <?php endif; ?>

    </div>
    <!-- End Email Box -->

    <!-- Scroll Box -->
    <div class="scroll-box">
        <span class="icon flaticon-mouse"></span>
    </div>
    <!-- End Scroll Box -->

    <!-- Counter Boxed -->
    <div class="counter-boxed">
        <div class="row clearfix">

            <!-- Counter Column -->
            <div class="counter-block col-lg-4 col-md-4 col-sm-4">
                <div class="inner-box">
                    <div class="counter"><span class="odometer" data-count="5"></span> K+</div>
                    <div class="counter-text">Happy Customers</div>
                </div>
            </div>

            <!-- Counter Column -->
            <div class="counter-block col-lg-4 col-md-4 col-sm-4">
                <div class="inner-box">
                    <div class="counter"><span class="odometer" data-count="2"></span> M+</div>
                    <div class="counter-text">Printing Media</div>
                </div>
            </div>

            <!-- Counter Column -->
            <div class="counter-block col-lg-4 col-md-4 col-sm-4">
                <div class="inner-box">
                    <div class="counter"><span class="odometer" data-count="4"></span>K+ </div>
                    <div class="counter-text">Projects Done!</div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Counter Boxed -->

</section>
<?php endif; ?>
<!-- End Main Section -->



<!-- Business Section -->
<section class="business-section">
    <div class="small-circle-layer"></div>
    <div class="vector-layer-one" style="background-image: url(assets/v2/images/icons/vector-1.png)"></div>
    <div class="vector-layer-two" style="background-image: url(assets/v2/images/icons/vector-2.png)"></div>
    <div class="vector-layer-three" style="background-image: url(assets/v2/images/icons/vector-5.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Images Column -->
            <div class="images-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="circle-layer" style="background-image: url('assets/v2/images/background/circles-layer.png')"></div>
                    <div class="images-outer parallax-scene-1">
                        <div class="image" data-depth="0.20">
                            <img src="<?php echo e(url('assets/v2/images/resource/business-1.jpg')); ?>" alt="" />
                        </div>
                        <div class="image-two" data-depth="0.30">
                            <img src="<?php echo e(url('assets/v2/images/resource/business-2.jpg')); ?>" alt="" />
                        </div>
                        <div class="image-three" data-depth="0.70">
                            <img src="<?php echo e(url('assets/v2/images/resource/business-3.jpg')); ?>" alt="" />
                        </div>
                    </div>
                    <div class="print-icon">
                        <img src="<?php echo e(url('assets/v2/images/icons/printer.png')); ?>" alt="" />
                    </div>
                </div>
            </div>
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
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




</section>
<!-- End Business Section -->



<!-- Services Section Four -->
<section class="services-section-four pb-0">
    <div class="color-one"></div>
    <div class="color-two"></div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    <div class="title">Ready to kick start your business? <?php echo e($setting->website_name); ?> is ready to sort you</div>
                    <h2>Provide <span>Stuning </span> <br> services for your business</h2>
                </div>
                <!-- Button Box -->
                <div class="button-box">
                    <a href="<?php echo e(url('services')); ?>" class="theme-btn btn-style-one clearfix">
                        <span class="btn-wrap">
                            <span class="text-one">See More Service</span>
                            <span class="text-two">See More Service</span>
                        </span>
                        <span class="icon flaticon-right-arrow"></span>
                    </a>
                </div>
                <div>
                    <div class="text">
                        Design, Printing, Branding & Signage <br> for your company, business, organization,
                        institution etc <br> at an affordable price
                    </div>
                </div>
            </div>
        </div>

        <?php echo $__env->make($version.'_what_we_do', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    </div>
</section>
<!-- End Services Section Four -->

<?php echo $__env->make($version.'_why_us', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>



<?php if(!empty($galleryImages)): ?>
<!-- Project Section -->
<section class="project-section">
    <div class="circle-layer"></div>
    <div class="vector-icon" style="background-image: url('assets/v2/images/icons/vector-7.png')"></div>
    <div class="outer-container">
        <div class="project-carousel owl-carousel owl-theme">

            <?php $__currentLoopData = $galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galleryImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Project Block -->
            <div class="project-block">
                <div class="inner-box">
                    <div class="image">
                        <a href="<?php echo e($galleryImage->getCategory->parent_id==0?url($galleryImage->getCategory->slug):url($galleryImage->getParent($galleryImage->getCategory->parent_id)->slug.'/'.$galleryImage->getCategory->slug)); ?>"><img src="<?php echo e(url($galleryImage->getImageInfo())); ?>" alt="" /></a>
                        <div class="post-number"><?php echo e($loop->iteration); ?></div>
                        <div class="content">
                            <h6><a href="<?php echo e($galleryImage->getCategory->parent_id==0?url($galleryImage->getCategory->slug):url($galleryImage->getParent($galleryImage->getCategory->parent_id)->slug.'/'.$galleryImage->getCategory->slug)); ?>"><?php echo e($galleryImage->getCategory->name); ?></a></h6>
                            <a class="arrow flaticon-right-arrow" href="<?php echo e($galleryImage->getCategory->parent_id==0?url($galleryImage->getCategory->slug):url($galleryImage->getParent($galleryImage->getCategory->parent_id)->slug.'/'.$galleryImage->getCategory->slug)); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>

    <!-- Lower Box -->
    <div class="lower-box">
        <div class="lower-inner d-flex justify-content-between align-items-center flex-wrap">
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
                            <span class="text-one">Request Quote</span>
                            <span class="text-two">Request Quote</span>
                        </span>
                        <span class="icon flaticon-right-arrow"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- End Lower Box -->

</section>
<!-- End Project Section -->
<?php endif; ?>


<!-- Printing Section -->
<?php echo $__env->make($version.'_mockup', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- End Printing Section -->


<!-- Services Section Two -->
<section class="services-section-two">
    <div class="icon-one"></div>
    <div class="icon-two"></div>
    <div class="icon-three"></div>
    <div class="icon-four"></div>
    <div class="vector-icon-one" style="background-image: url(assets/v2/images/icons/vector-11.png)"></div>
    <div class="auto-container">
        <!-- Title Box -->
        <div class="title-box text-center">
            <h2>How we do it?</h2>
            <p>
                At <span class="big-text"><?php echo e($setting->website_name); ?></span>, we believe in a collaborative approach to creating exceptional signage solutions
                that meet and exceed our clients' expectations. Our streamlined process ensures clarity, efficiency,
                and satisfaction at every stage of your signage project.

            </p>
        </div>
        <div class="inner-container">
            <div class="row clearfix">

                <!-- Service Block Two -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="service-number">01</div>
                            <div class="icon flaticon-handshake"></div>
                        </div>
                        <h5>Initial Consultation</h5>
                        <div class="text">
                            We take the time to understand your needs, goals, and vision for your signage project. Whether you're
                            looking to enhance brand visibility, promote a product or service, or simply
                            update your existing signage, we listen attentively to your requirements and offer
                            expert guidance to help bring your ideas to life.
                        </div>
                    </div>
                </div>

                <!-- Service Block Two -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="service-number">02</div>
                            <div class="icon flaticon-bulb"></div>
                        </div>
                        <h5>Design Concept</h5>
                        <div class="text">
                            Once we have a clear understanding of your goals, our talented design team will
                            create custom design concepts that bring your vision to life. We'll present you
                            with several options to choose from, and we welcome your feedback to ensure that
                            the final design reflects your brand identity and messaging.
                        </div>
                    </div>
                </div>

                <!-- Service Block Two -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="service-number">03</div>
                            <div class="icon flaticon-gear"></div>
                        </div>
                        <h5>Fabrication Phase</h5>
                        <div class="text">
                            Once the design is approved, our skilled craftsmen will begin the fabrication
                            process using the highest quality materials and state-of-the-art equipment.
                            We take pride in our attention to detail and commitment to quality craftsmanship,
                            ensuring that every sign we produce meets our rigorous standards of excellence.
                        </div>
                    </div>
                </div>
                <!-- Service Block Two -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="service-number">04</div>
                            <div class="icon flaticon-brand-awareness"></div>
                        </div>
                        <h5>Product Installation</h5>
                        <div class="text">
                            With the fabrication complete, our professional installation team will coordinate the
                            delivery and installation of your signage with precision and efficiency. Whether it's
                            indoor signage, outdoor signage, illuminated signs, or vehicle wraps, we'll ensure that
                            your signs are installed securely and accurately for maximum impact.
                        </div>
                    </div>
                </div>
                <!-- Service Block Two -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="service-number">05</div>
                            <div class="icon flaticon-value"></div>
                        </div>
                        <h5>Quality Assurance</h5>
                        <div class="text">
                            Throughout the process, we maintain strict quality control measures to ensure that
                            every sign meets our standards of excellence. From design to installation,
                            we carefully inspect each sign for quality, accuracy, and durability to ensure
                            that it exceeds your expectations and stands the test of time.
                        </div>
                    </div>
                </div>

                <!-- Service Block Two -->
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="service-number">06</div>
                            <div class="icon flaticon-user"></div>
                        </div>
                        <h5>Customer Satisfaction</h5>
                        <div class="text">
                            At <?php echo e($setting->website_name); ?>, customer satisfaction is our top priority. We strive to provide a
                            seamless and enjoyable experience for our clients from start to finish.
                            Our friendly and knowledgeable team is always available to address your questions,
                            concerns, and requests, ensuring that your needs are met.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Services Section Two -->


<!-- Quality Section -->
<section class="quality-section">
    <div class="color-one"></div>
    <div class="color-two"></div>
    <div class="color-three"></div>
    <div class="vector-layer" style="background-image: url('assets/v2/images/icons/vector-12.png')"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Images Column -->
            <div class="images-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image titlt" data-tilt data-tilt-max="4">
                        <img src="<?php echo e(url('assets/v2/images/resource/quality.png')); ?>" alt="" />
                    </div>
                </div>
            </div>
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="title style-two">High Quality Service</div>
                        <h2>Our <span>creative design aprroach, Unparalleled Craftsmanship & Dedication to Excellence</span> <br> means you’ll get higher quality</h2>
                        <div class="text">We are ready to bring your vision to reality and commited to achieving the highest standards in all aspects of our work and endeavors</div>
                    </div>
                    <!-- Options List -->
                    <ul class="options-list">
                        <li>First impressions count: Clear and accurate designs guaranteed</li>
                        <li>Readability is key: faster recognition with good contrast, legible fonts, and correct viewing distance</li>
                        <li>Lighting: Illumination (LED, backlit, neon) increases visibility at night and in poor weather.</li>
                        <li>Quality printing = perceived quality: Crisp, high-resolution prints that convey professionalism</li>
                    </ul>
                    <!-- Demand -->
                    <div class="demand">We provide fast on-demand <span>printing.</span></div>

                    <!-- Info Box -->
                    <div class="info-box d-flex">

                        <!-- Button Box -->
                        <div class="button-box">
                            <a href="<?php echo e(url('contact')); ?>" class="theme-btn btn-style-one clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">Request Quote</span>
                                    <span class="text-two">Request Quote</span>
                                </span>
                                <span class="icon flaticon-right-arrow"></span>
                            </a>
                        </div>
                        <!-- Play Box -->
                        <a href="javascript:void()" class="lightbox-video play-box"><span class="fa fa-play"></span><i class="ripple"></i></a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Quality Section -->


<!-- Fluid Section One -->
<section class="fluid-section-one">
    <div class="outer-container clearfix">

        <!-- Left Column -->
        <div class="left-column">
            <div class="inner-column">

                <div class="sec-title">
                    <div class="title">Our Case Study</div>
                    <h2>We are just <span>better Quality</span> <br> for over <i><?php echo e(date('Y')-2016); ?>+</i> years -</h2>
                    <div class="text">What’s more, we do it right! We value quality work to all our customers.</div>
                </div>
                <!-- Options -->
                <ul class="options">
                    <li><span class="number">1</span>See Our Case Study</li>
                    <li><span class="number">2</span>make Good Vibes About Us</li>
                </ul>

                <div class="row clearfix">
                    <div class="column col-lg-5 col-md-6 col-sm-12">
                        <h3>Digital Printing</h3>
                        <div class="d-flex">
                            <div class="circles">
                                <img src="<?php echo e(url('assets/v2/images/icons/circles.png')); ?>" alt="" />
                            </div>
                            <!-- Play Box -->
                            <a href="javascript:;" class="lightbox-video play-box"><span class="fa fa-play"></span><i class="ripple"></i></a>
                        </div>

                        <!-- Button Box -->
                        <div class="button-box">
                            <a href="<?php echo e(url('contact')); ?>" class="theme-btn btn-style-one clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">Request Quote</span>
                                    <span class="text-two">Request Quote</span>
                                </span>
                                <span class="icon flaticon-right-arrow"></span>
                            </a>
                        </div>

                    </div>
                    <div class="column col-lg-7 col-md-6 col-sm-12">
                        <!-- Accordion Box -->
                        <ul class="accordion-box">

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Creative Design Aproach
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            Make your signage dreams come to life! We're excited to embark on this
                                            creative journey with you and bring your vision to reality. You give us
                                            the task, we do everthing you need.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Unparalleled Craftsmanship
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">
                                            Crafting exceptional signage isn't just a job for us; it's our passion and our craft.
                                            We understand that every sign we create is a reflection of your brand and a vital
                                            component of your visual identity.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Dedication to Excellence
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            We are commited to achieving the highest standards in all aspects of our work and endeavors
                                            going above and beyond, exceeding expectations, and consistently delivering exceptional
                                            results.
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- Right Column -->
        <div class="right-column">
            <div class="inner-column mt-4">
                <div class="masonry-items-container row clearfix">
                    <?php
                    $myClasses=['style-two col-lg-4'];
                    ?>
                    <?php echo $__env->make($version.'projects._project_item',['projects'=>$projects,'myClasses'=>$myClasses], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Fluid Section One -->

<!-- Testimonial Section -->
<?php echo $__env->make($version.'_testimonial', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- End Testimonial Section -->

<!-- Faq Section -->
<?php echo $__env->make($version.'_faq', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- End Faq Section -->

<!-- Brand Section -->
<?php echo $__env->make($version.'_brand', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- End Brand Section -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/v2/index.blade.php ENDPATH**/ ?>