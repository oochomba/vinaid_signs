	@extends($version.'layouts.app')
	@section('content')
	<section class="page-title">
	    <div class="auto-container">
	        <!-- Icons Box -->
	        <div class="icons-box parallax-scene-1" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
	            <div class="icon-one" data-depth="0.10" style="transform: translate3d(10.9px, -3.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></div>
	            <div class="icon-two" data-depth="0.30" style="transform: translate3d(32.7px, -10.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
	                <img src="{{ url('assets/v2/images/icons/vector-9.png') }}" alt="">
	            </div>
	            <div class="icon-three" data-depth="0.30" style="transform: translate3d(32.7px, -10.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
	                <img src="{{ url('assets/v2/images/icons/vector-34.png') }}" alt="">
	            </div>
	            <div class="icon-four" data-depth="0.10" style="transform: translate3d(10.9px, -3.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></div>
	        </div>
	        <h2>{{ $mockup->title }}</h2>
	        <ul class="bread-crumb clearfix">
	            <li><a href="{{ url('') }}">Home</a></li>
	            <li><a href="{{ url('our-work') }}">Our Work</a></li>
	            <li>{{ $mockup->title }}</li>
	        </ul>
	    </div>
	</section>

	<section class="shop-detail-section">
	    <div class="auto-container">
	        <!-- Upper Box -->
	        <div class="upper-box">
	            <div class="row clearfix">
	                <!-- Gallery Column -->
	                <div class="gallery-column col-lg-6 col-md-12 col-sm-12">
	                    <div class="inner-column">
	                        <div class="carousel-outer">
	                            <!-- Swiper -->
	                            <div class="swiper-container content-carousel content-carousel-before">
	                                <div class="swiper-wrapper">
	                                    <div class="swiper-slide">
	                                        <figure class="image"><a href="{{ url('assets/v2/images/resource/products/13.jpg') }}" class="lightbox-image"><img src="{{ url('assets/v2/images/resource/products/13.jpg') }}" alt=""></a></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="image"><a href="{{ url('assets/v2/images/resource/products/13.jpg') }}" class="lightbox-image"><img src="{{ url('assets/v2/images/resource/products/13.jpg') }}" alt=""></a></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="image"><a href="{{ url('assets/v2/images/resource/products/13.jpg') }}" class="lightbox-image"><img src="{{ url('assets/v2/images/resource/products/13.jpg') }}" alt=""></a></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="image"><a href="{{ url('assets/v2/images/resource/products/13.jpg') }}" class="lightbox-image"><img src="{{ url('assets/v2/images/resource/products/13.jpg') }}" alt=""></a></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="image"><a href="{{ url('assets/v2/images/resource/products/13.jpg') }}" class="lightbox-image"><img src="{{ url('assets/v2/images/resource/products/13.jpg') }}" alt=""></a></figure>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="swiper-container thumbs-carousel thumbs-carousel-before">
	                                <div class="swiper-wrapper">
	                                    <div class="swiper-slide">
	                                        <figure class="thumb"><img src="{{ url('assets/v2/images/resource/products/post-thumb-1.jpg') }}" alt=""></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="thumb"><img src="{{ url('assets/v2/images/resource/products/post-thumb-2.jpg') }}" alt=""></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="thumb"><img src="{{ url('assets/v2/images/resource/products/post-thumb-3.jpg') }}" alt=""></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="thumb"><img src="{{ url('assets/v2/images/resource/products/post-thumb-4.jpg') }}" alt=""></figure>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- Content Column -->
	                <div class="content-column col-lg-6 col-md-12 col-sm-12">
	                    <div class="inner-column">
	                        <h3>Accesories Lather Shoes</h3>
	                        <div class="carousel-outer">
	                            <!-- Swiper -->
	                            <div class="swiper-container content-carousel content-carousel-after">
	                                <div class="swiper-wrapper">
	                                    <div class="swiper-slide">
	                                        <figure class="image"><a href="{{ url('assets/v2/images/resource/products/13.jpg') }}" class="lightbox-image"><img src="{{ url('assets/v2/images/resource/products/13.jpg') }}" alt=""></a></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="image"><a href="{{ url('assets/v2/images/resource/products/13.jpg') }}" class="lightbox-image"><img src="{{ url('assets/v2/images/resource/products/13.jpg') }}" alt=""></a></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="image"><a href="{{ url('assets/v2/images/resource/products/13.jpg') }}" class="lightbox-image"><img src="{{ url('assets/v2/images/resource/products/13.jpg') }}" alt=""></a></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="image"><a href="{{ url('assets/v2/images/resource/products/13.jpg') }}" class="lightbox-image"><img src="{{ url('assets/v2/images/resource/products/13.jpg') }}" alt=""></a></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="image"><a href="{{ url('assets/v2/images/resource/products/13.jpg') }}" class="lightbox-image"><img src="{{ url('assets/v2/images/resource/products/13.jpg') }}" alt=""></a></figure>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="swiper-container thumbs-carousel thumbs-carousel-after">
	                                <div class="swiper-wrapper">
	                                    <div class="swiper-slide">
	                                        <figure class="thumb"><img src="{{ url('assets/v2/images/resource/products/post-thumb-1.jpg') }}" alt=""></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="thumb"><img src="{{ url('assets/v2/images/resource/products/post-thumb-2.jpg') }}" alt=""></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="thumb"><img src="{{ url('assets/v2/images/resource/products/post-thumb-3.jpg') }}" alt=""></figure>
	                                    </div>
	                                    <div class="swiper-slide">
	                                        <figure class="thumb"><img src="{{ url('assets/v2/images/resource/products/post-thumb-4.jpg') }}" alt=""></figure>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- End Upper Box -->

	        <!-- Lower Box -->
	        <div class="lower-box">

	            <!-- Product Info Tabs -->
	            <div class="product-info-tabs">
	                <!-- Product Tabs -->
	                <div class="prod-tabs tabs-box">

	                    <!-- Tab Btns -->
	                    <ul class="tab-btns tab-buttons clearfix">
	                        <li data-tab="#prod-details" class="tab-btn active-btn">Product Details</li>
	                        <li data-tab="#prod-info" class="tab-btn">additional information</li>
	                        <li data-tab="#prod-review" class="tab-btn">Review (02)</li>
	                        <li data-tab="#prod-faq" class="tab-btn">Faq</li>
	                    </ul>

	                    <!-- Tabs Container -->
	                    <div class="tabs-content">

	                        <!-- Tab / Active Tab -->
	                        <div class="tab active-tab" id="prod-details">
	                            <div class="content">
	                                <h3>Experience is over the world visit</h3>
	                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus</p>
	                                <h5>More Details</h5>
	                                <div class="row clearfix">
	                                    <div class="col-lg-6 col-md-12 col-sm-12">
	                                        <ul class="list-one">
	                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
	                                            <li>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.</li>
	                                            <li>type here your detail one by one li more add</li>
	                                            <li>has been the industry’s standard dummy text ever since. Lorem Ips</li>
	                                        </ul>
	                                    </div>
	                                    <div class="col-lg-6 col-md-12 col-sm-12">
	                                        <ul class="list-two">
	                                            <li>Lorem Ipsum generators on the tend to repeat.</li>
	                                            <li>If you are going to use a passage.</li>
	                                            <li>Lorem Ipsum generators on the tend to repeat.</li>
	                                            <li>Lorem Ipsum generators on the tend to repeat.</li>
	                                            <li>If you are going to use a passage.</li>
	                                        </ul>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

	                        <!-- Tab -->
	                        <div class="tab" id="prod-info">
	                            <div class="content">
	                                <h3>Experience is over the world visit</h3>
	                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus</p>
	                            </div>
	                        </div>

	                        <!--Tab-->
	                        <div class="tab" id="prod-review">
	                            <h2 class="title">2 Reviews For win Your Friends</h2>
	                            <!--Reviews Container-->
	                            <div class="comments-area">
	                                <!--Comment Box-->
	                                <div class="comment-box">
	                                    <div class="comment">
	                                        <div class="author-thumb"><img src="{{ url('assets/v2/images/resource/author-1.jpg') }}" alt=""></div>
	                                        <div class="comment-inner">
	                                            <div class="comment-info clearfix">Steven Rich – March 17, 2022:</div>
	                                            <div class="rating">
	                                                <span class="fa fa-star"></span>
	                                                <span class="fa fa-star"></span>
	                                                <span class="fa fa-star"></span>
	                                                <span class="fa fa-star"></span>
	                                                <span class="fa fa-star light"></span>
	                                            </div>
	                                            <div class="text">How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <!--Comment Box-->
	                                <div class="comment-box reply-comment">
	                                    <div class="comment">
	                                        <div class="author-thumb"><img src="{{ url('assets/v2/images/resource/author-2.jpg') }}" alt=""></div>
	                                        <div class="comment-inner">
	                                            <div class="comment-info clearfix">William Cobus – April 21, 2022:</div>
	                                            <div class="rating">
	                                                <span class="fa fa-star"></span>
	                                                <span class="fa fa-star"></span>
	                                                <span class="fa fa-star"></span>
	                                                <span class="fa fa-star"></span>
	                                                <span class="fa fa-star-half-empty"></span>
	                                            </div>
	                                            <div class="text">There anyone who loves or pursues or desires to obtain pain itself, because it is pain sed, because occasionally circumstances occur some great pleasure.</div>
	                                        </div>
	                                    </div>
	                                </div>

	                            </div>

	                            <!-- Comment Form -->
	                            <div class="shop-comment-form">
	                                <h4>Add Your Comments</h4>
	                                <div class="rating-box">
	                                    <div class="text"> Your Rating:</div>
	                                    <div class="rating">
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                    </div>
	                                    <div class="rating">
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                    </div>
	                                    <div class="rating">
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                    </div>
	                                    <div class="rating">
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                    </div>
	                                    <div class="rating">
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                        <a href="#"><span class="fa fa-star"></span></a>
	                                    </div>
	                                </div>
	                                <form method="post" action="contact.html">
	                                    <div class="row clearfix">
	                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
	                                            <label>First Name *</label>
	                                            <input type="text" name="username" placeholder="" required>
	                                        </div>

	                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
	                                            <label>Last Name*</label>
	                                            <input type="email" name="email" placeholder="" required>
	                                        </div>
	                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
	                                            <label>Email*</label>
	                                            <input type="text" name="number" placeholder="" required>
	                                        </div>
	                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
	                                            <label>Your Comments*</label>
	                                            <textarea name="message" placeholder=""></textarea>
	                                        </div>

	                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
	                                            <button class="theme-btn btn-style-four clearfix">
	                                                <span class="btn-wrap">
	                                                    <span class="text-one">Submit now</span>
	                                                    <span class="text-two">Submit now</span>
	                                                </span>
	                                            </button>

	                                        </div>

	                                    </div>
	                                </form>

	                            </div>

	                        </div>

	                        <!-- Tab -->
	                        <div class="tab" id="prod-faq">
	                            <div class="content">
	                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse consectetur tristique tortor</p>
	                            </div>
	                        </div>

	                    </div>
	                </div>

	            </div>
	            <!--End Product Info Tabs-->

	        </div>
	        <!-- End Lower Box -->

	    </div>
	</section>
	@include($version.'_brand')
	@endsection