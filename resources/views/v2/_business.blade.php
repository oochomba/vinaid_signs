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
                    <div class="circle-layer" style="background-image: url(assets/v2/images/background/circles-layer.png)"></div>
                    <div class="images-outer parallax-scene-1">
                        <div class="image" data-depth="0.20">
                            <img src="assets/v2/images/resource/business-1.jpg" alt="" />
                        </div>
                        <div class="image-two" data-depth="0.30">
                            <img src="assets/v2/images/resource/business-2.jpg" alt="" />
                        </div>
                        <div class="image-three" data-depth="0.70">
                            <img src="assets/v2/images/resource/business-3.jpg" alt="" />
                        </div>
                    </div>
                    <div class="print-icon">
                        <img src="assets/v2/images/icons/printer.png" alt="" />
                    </div>
                </div>
            </div>
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="title">Welcome to {{ $setting->website_name }}</div>
                        <h2>Where <span>Creativity Meets</span> <br> Visibility</h2>
                        <div class="text">
                            We specialize in<span class="big-text"> Crafting Bespoke Signage Solutions </span>
                            that make your brand stand out in the crowd. Whether you need eye-catching outdoor signs,
                            captivating indoor displays, or attention-grabbing vehicle wraps, we've got you covered.
                            Explore our <a href="{{ url('portfolio') }}">Portfolio</a> and let's bring your brand vision to
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

    @include($version.'_what_we_do')


</section>