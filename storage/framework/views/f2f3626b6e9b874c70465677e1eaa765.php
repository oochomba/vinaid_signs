	
	<?php $__env->startSection('content'); ?>
	<section class="page-title">
	    <div class="auto-container">
	        <!-- Icons Box -->
	        <div class="icons-box parallax-scene-1" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
	            <div class="icon-one" data-depth="0.10" style="transform: translate3d(2.9px, -3.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></div>
	            <div class="icon-two" data-depth="0.30" style="transform: translate3d(8.7px, -10.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
	                <img src="<?php echo e(url('assets/v2/images/icons/vector-9.png')); ?>" alt="">
	            </div>
	            <div class="icon-three" data-depth="0.30" style="transform: translate3d(8.7px, -10.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
	                <img src="<?php echo e(url('assets/v2/images/icons/vector-34.png')); ?>" alt="">
	            </div>
	            <div class="icon-four" data-depth="0.10" style="transform: translate3d(2.9px, -3.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></div>
	        </div>
	        <h2>Contact Us</h2>
	        <ul class="bread-crumb clearfix">
	            <li><a href="<?php echo e(url('')); ?>">Home</a></li>
	            <li>Contact Us</li>
	        </ul>
	    </div>
	</section>


	<section class="contact-info-section">
	    <div class="auto-container">
	        <div class="row clearfix">

	            <?php if(!empty($setting->email)): ?>
	            <!-- Info Column -->
	            <div class="info-column col-xl-3 col-lg-6 col-md-6 col-sm-12">
	                <div class="inner-column d-flex align-items-center">
	                    <div class="icon flaticon-email-1"></div>
	                    <div class="content">
	                        <strong>Mail address</strong>
	                        <a href="mailto:<?php echo e($setting->email); ?>"><?php echo e($setting->email); ?></a>
	                    </div>
	                </div>
	            </div>
	            <?php endif; ?>

	            <?php if(!empty($setting->address)): ?>
	            <!-- Info Column -->
	            <div class="info-column col-xl-3 col-lg-6 col-md-6 col-sm-12">
	                <div class="inner-column d-flex align-items-center">
	                    <div class="icon flaticon-map"></div>
	                    <div class="content">
	                        <strong>Office Location</strong>
	                        <div class="text"><?php echo $setting->address; ?></div>
	                    </div>
	                </div>
	            </div>
	            <?php endif; ?>

	            <?php if(!empty($setting->phone)): ?>
	            <!-- Info Column -->
	            <div class="info-column col-xl-3 col-lg-6 col-md-6 col-sm-12">
	                <div class="inner-column d-flex align-items-center">
	                    <div class="icon flaticon-telephone"></div>
	                    <div class="content">
	                        <strong>Phone Number</strong>
	                        <a href="tel:<?php echo e($setting->phone); ?>"><?php echo e($setting->phone); ?></a>
	                        <?php if(!empty($setting->phone_two)): ?>
	                        <a href="tel:<?php echo e($setting->phone_two); ?>"><?php echo e($setting->phone_two); ?></a>
	                        <?php endif; ?>
	                    </div>
	                </div>
	            </div>
	            <?php endif; ?>

	            <!-- Info Column -->
	            <div class="info-column col-xl-3 col-lg-6 col-md-6 col-sm-12">
	                <div class="inner-column d-flex align-items-center">
	                    <div class="icon flaticon-whatsapp"></div>
	                    <div class="content">
	                        <strong>Connect Us</strong>
	                        <?php if(!empty($setting->phone)): ?>
	                        <a href="https://wa.me/<?php echo e(str_replace(' ','',str_replace('+','',$setting->phone))); ?>" target="_blank"><?php echo e($setting->phone); ?></a>
	                        <?php endif; ?>
	                        <?php if(!empty($setting->phone_two)): ?>
	                        <a href="https://wa.me/<?php echo e(str_replace(' ','',str_replace('+','',$setting->phone_two))); ?>" target="_blank"><?php echo e($setting->phone_two); ?></a>
	                        <?php endif; ?>
	                    </div>
	                </div>
	            </div>

	        </div>
	    </div>
	</section>

	<section class="contact-section">
	    <div class="auto-container">
	        <div class="row clearfix">
	            <!-- Image Column -->
	            <div class="image-column col-lg-5 col-md-12 col-sm-12">
	                <div class="inner-column">
	                    <div class="image">
	                        <img src="<?php echo e(url('assets/v2/images/resource/contact.jpg')); ?>" alt="">
	                    </div>
	                    <div class="color-layer"></div>
	                </div>
	            </div>
	            <!-- Form Column -->
	            <div class="form-column col-lg-7 col-md-12 col-sm-12">
	                <div class="inner-column">

	                    <!-- Contact Form -->
	                    <div class="contact-form">
	                        <form method="post" action="" id="contact-form" novalidate="novalidate">
	                            <?php echo e(csrf_field()); ?>

	                            <div class="row clearfix">

	                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
	                                    <input type="text" name="name" placeholder="Enter Your name" required="">
	                                </div>

	                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
	                                    <input type="text" name="email" placeholder="Enter Your Phone Email" required="">
	                                </div>

	                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
	                                    <input type="text" name="phone" placeholder="Enter Your Phone Number">
	                                </div>


	                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
	                                    <input type="text" name="subject" placeholder="Subject" required="">
	                                </div>

	                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
	                                    <textarea class="" name="message" placeholder="Contact Message"></textarea>
	                                </div>

	                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 form-group">
	                                    <div class="check-box">
	                                        <input type="checkbox" name="remember-password" id="type-1">
	                                        <label for="type-1">Save my name, email, and website in this browser for the next time.</label>
	                                    </div>
	                                </div> -->

	                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
	                                    <div class="buttons-box">
	                                        <button class="theme-btn btn-style-three">
	                                            <span class="btn-wrap">
	                                                <span class="text-one">Send Messege</span>
	                                                <span class="text-two">Send Messege</span>
	                                            </span>
	                                            <span class="icon flaticon-right-arrow"></span>
	                                        </button>
	                                    </div>
	                                </div>

	                            </div>
	                        </form>
	                    </div>
	                    <!-- End Contact Form -->

	                </div>
	            </div>
	        </div>

	        <!-- Lower Box -->
	        <div class="lower-box">
	            <div class="row clearfix">
	                <!-- Video Column -->
	                <div class="video-column col-lg-4 col-md-12 col-sm-12">
	                    <!-- Video Box -->
	                    <div class="video-box">
	                        <figure class="video-image">
	                            <img class="transition-500ms" src="<?php echo e(url('assets/v2/images/resource/video-image.jpg')); ?>" alt="">
	                        </figure>
	                        <a href="javascript:;" class="lightbox-video overlay-box"><span class="flaticon-media-play-symbol transition-900ms"><i class="ripple"></i></span></a>
	                    </div>
	                </div>
	                <!-- Image Column -->
	                <div class="image-column col-lg-8 col-md-12 col-sm-12">
	                    <div class="image">
	                        <img src="<?php echo e(url('assets/v2/images/resource/contact-1.jpg')); ?>" alt="">
	                    </div>
	                </div>
	            </div>
	        </div>

	        <!-- Lower Content Box -->
	        <div class="lower-content-box">
	            <div class="row clearfix">
	                <div class="column col-lg-8 col-md-12 col-sm-12">
	                    <h3>Welecome to <span class="big-text"><?php echo e(!empty($setting->website_name)?$setting->website_name:''); ?></span> where creativity meats reality</h3>
	                    <p>
	                        In today's rapidly evolving technology landscape, choosing the right partner is
	                        crucial for your business success. At <span class="big-text"><?php echo e(!empty($setting->website_name)?$setting->website_name:''); ?></span>,
	                        we stand out from the crowd with our unwavering commitment to quality, expertise, and customer satisfaction.
	                        It’s important to us that our signs look fantastic – but we also think very
	                        carefully about how they work, how useful they are and whether they’re installed
	                        properly. Here are just a few reasons why you should choose us:
	                    </p>
	                    <p>
	                        At <span class="big-text"><?php echo e(!empty($setting->website_name)?$setting->website_name:''); ?></span>, we believe in a collaborative approach to creating exceptional signage
	                        solutions that meet and exceed our clients' expectations. Our streamlined process ensures
	                        clarity, efficiency, and satisfaction at every stage of your signage project.
	                    </p>
	                </div>
	                <div class="column col-lg-4 col-md-12 col-sm-12">

	                    <!-- Accordion Box -->
	                  <?php echo $__env->make($version.'_faq_list', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

	                </div>
	            </div>
	        </div>

	    </div>
	</section>


	<?php echo $__env->make($version.'_brand', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/v2/contact.blade.php ENDPATH**/ ?>