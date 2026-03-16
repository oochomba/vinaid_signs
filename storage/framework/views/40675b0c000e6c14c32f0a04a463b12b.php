<?php if(!empty($mockups)): ?>
<section class="printing-section">
    <div class="auto-container">
        <div class="vector-icon-three" style="background-image: url(assets/v2/images/icons/vector-9.png)"></div>
        <!-- Inner Container -->
        <div class="inner-container">
            <div class="pattern-layer" style="background-image: url(assets/v2/images/background/pattern-1.png)"></div>
            <div class="print-carousel owl-carousel owl-theme">

                <?php $__currentLoopData = $mockups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mockup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Slide One -->
                <div class="slide">
                    <div class="clearfix">
                        <!-- Print Block -->
                        <div class="print-block col-lg-6 col-md-6 col-sm-12">
                            <?php
                            $beforeImage=$mockup->getImageBeforeAfterSingle($mockup->id,0);
                            ?>
                            <div class="inner-box">
                                <div class="image">
                                    <div class="color-layer"></div>
                                    <div class="tag">Before Service</div>

                                    <a href="javascript:;">
                                        <img src="<?php echo e(!empty($beforeImage)?url($beforeImage->getImageInfo()):''); ?>" alt="Before Image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Print Block -->
                        <div class="print-block col-lg-6 col-md-6 col-sm-12">
                             <?php
                            $afterImage=$mockup->getImageBeforeAfterSingle($mockup->id,1);
                            ?>
                            <div class="inner-box">
                                <div class="image">
                                    <div class="color-layer"></div>
                                    <div class="tag">After Service</div>
                                    <a href="javascript:;">
                                        <img src="<?php echo e(!empty($afterImage)?url($afterImage->getImageInfo()):''); ?>" alt="After Image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post Info -->
                    <div class="post-info">
                        <?php echo e($mockup->title); ?>

                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="light fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    </div>
</section>

<?php endif; ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/v2/_mockup.blade.php ENDPATH**/ ?>