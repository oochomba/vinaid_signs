@if (!empty($mockups))
<section class="printing-section">
    <div class="auto-container">
        <div class="vector-icon-three" style="background-image: url(assets/v2/images/icons/vector-9.png)"></div>
        <!-- Inner Container -->
        <div class="inner-container">
            <div class="pattern-layer" style="background-image: url(assets/v2/images/background/pattern-1.png)"></div>
            <div class="print-carousel owl-carousel owl-theme">

                @foreach ($mockups as $mockup)
                <!-- Slide One -->
                <div class="slide">
                    <div class="clearfix">
                        <!-- Print Block -->
                        <div class="print-block col-lg-6 col-md-6 col-sm-12">
                            @php
                            $beforeImage=$mockup->getImageBeforeAfterSingle($mockup->id,0);
                            @endphp
                            <div class="inner-box">
                                <div class="image">
                                    <div class="color-layer"></div>
                                    <div class="tag">Before Service</div>

                                    <a href="javascript:;">
                                        <img src="{{ !empty($beforeImage)?url($beforeImage->getImageInfo()):'' }}" alt="Before Image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Print Block -->
                        <div class="print-block col-lg-6 col-md-6 col-sm-12">
                             @php
                            $afterImage=$mockup->getImageBeforeAfterSingle($mockup->id,1);
                            @endphp
                            <div class="inner-box">
                                <div class="image">
                                    <div class="color-layer"></div>
                                    <div class="tag">After Service</div>
                                    <a href="javascript:;">
                                        <img src="{{ !empty($afterImage)?url($afterImage->getImageInfo()):'' }}" alt="After Image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post Info -->
                    <div class="post-info">
                        {{ $mockup->title }}
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="light fa fa-star"></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

@endif