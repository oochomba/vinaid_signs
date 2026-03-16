
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
        <h2><?php echo e(!empty($page->title)?$page->title:'Page not found'); ?></h2>
        <ul class="bread-crumb clearfix">
            <li><a href="<?php echo e(url('')); ?>">Home</a></li>
            <li><?php echo e(!empty($page->title)?$page->title:'Page not found'); ?></li>
        </ul>
    </div>
</section>
<!-- End Page Title -->



<!-- Faq Section -->
<section class="faq-section">
    <div class="color-one"></div>
    <div class="color-two"></div>
    <div class="color-three"></div>
    <div class="color-four"></div>
    <div class="vector-layer-one" style="background-image: url('assets/v2/images/icons/vector-14.png')"></div>
    <div class="vector-layer-two" style="background-image: url('assets/v2/images/icons/vector-15.png')"></div>
    <div class="vector-layer-three" style="background-image: url('assets/v2/images/background/pattern-9.png')"></div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Want <span>To Know</span> <br> More</h2>
            <div class="text">
                Sure, here are some frequently asked questions (FAQs)
            </div>
        </div>
        <div class="inner-container">

            <!-- Accordion Box / Style Two -->
            <ul class="accordion-box style-two">

                <!-- Block -->
                <li class="accordion block">
                    <div class="acc-btn">
                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span>
                        </div>
                        What services do you offer?
                    </div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                We provide complete branding and visual communication solutions including:
                                <ul class="options-list">
                                    <li>
                                        Indoor & outdoor signage (3D letters, light boxes, billboards, vehicle branding)
                                    </li>
                                    <li>
                                        Large-format printing (banners, posters, backdrops, exhibition displays)
                                    </li>
                                    <li>
                                        Graphic design (logos, marketing materials, social media creatives)
                                    </li>
                                    <li>
                                        Corporate stationery (business cards, letterheads, envelopes)
                                    </li>
                                    <li>
                                        Promotional items (t-shirts, mugs, pens, stickers, packaging)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Block -->
                <li class="accordion block">
                    <div class="acc-btn active">
                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span>
                        </div>
                        How do I get a quote?
                    </div>
                    <div class="acc-content current">
                        <div class="content">
                            <div class="text">
                                Simply send us your artwork or design brief via email or our contact form.
                                Include sizes, quantities, and preferred materials. We’ll prepare a detailed
                                quotation within 24–48 hours.
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Block -->
                <li class="accordion block">
                    <div class="acc-btn">
                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                        Do you offer design services if I don’t have artwork?
                    </div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                Yes. Our in-house designers can create custom artwork or adapt your existing files to suit different formats.
                                We also help with brand guidelines to ensure consistency.
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Block -->
                <li class="accordion block">
                    <div class="acc-btn">
                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                        What file formats do you accept for printing?
                    </div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                We accept PDF, AI, EPS, PSD, and high-resolution JPEG/PNG files. For best results, supply vector files with fonts outlined.
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Block -->
                <li class="accordion block">
                    <div class="acc-btn">
                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                        What is your turnaround time?
                    </div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                Turnaround varies by project size and materials. Standard print jobs such as
                                business cards or flyers take 2–3 working days. Large signage or complex
                                installations may take 5–10 working days after artwork approval.
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Block -->
                <li class="accordion block">
                    <div class="acc-btn">
                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                        Can you handle urgent or same-day orders?
                    </div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                We do our best to accommodate rush jobs. Contact us with your deadline and
                                we’ll confirm feasibility and any express charges.
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Block -->
                <li class="accordion block">
                    <div class="acc-btn">
                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                        Do you deliver or install signage?
                    </div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                Yes. We offer delivery across the country (Kenya) and professional on-site
                                installation for all signage and display systems.
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Block -->
                <li class="accordion block">
                    <div class="acc-btn">
                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                        What materials do you use for signage?
                    </div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                We work with durable, weather-resistant materials such as acrylic, aluminum composite, PVC, fabric, and high-grade vinyl.
                                Our team will recommend the best material for your application.
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Block -->
                <li class="accordion block">
                    <div class="acc-btn">
                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                        Can you match my brand colors exactly?
                    </div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                Yes. We use color-managed digital printing and Pantone matching to
                                reproduce your brand colors as accurately as possible.
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Block -->
                <li class="accordion block">
                    <div class="acc-btn">
                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                        What payment options do you accept?
                    </div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                We accept bank transfers, mobile money, and major credit/debit cards. A deposit may be required to start
                                production, with the balance due upon completion.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="accordion block">
                    <div class="acc-btn">
                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                        Do you offer discounts for bulk orders?
                    </div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                Yes, we provide volume discounts on large or recurring orders. Contact our sales team for a custom quote.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="accordion block">
                    <div class="acc-btn">
                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                        How can I ensure my signage lasts longer?
                    </div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                We recommend using our premium materials and UV-resistant inks. Regular cleaning with mild
                                soap and water also extends the life of your sign.
                            </div>
                        </div>
                    </div>
                </li>

            </ul>

        </div>
    </div>
</section>
<!-- End Faq Section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/v2/page/faq.blade.php ENDPATH**/ ?>