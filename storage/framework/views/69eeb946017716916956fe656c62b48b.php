<?php if(!empty($rootCategories)): ?>
<!-- Inner Container -->
<div class="inner-container">
    <div class="three-item-carousel owl-carousel owl-theme">
        <?php $__currentLoopData = $rootCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $serviceImg = $service->getImageSingle($service->id);
        ?>
        <!-- Service Block Four -->
        <div class="service-block-four">
            <div class="inner-box">
                <div class="image">
                    <a href="<?php echo e($service->slug); ?>"><img class="service-image-thumb" src="<?php echo e(!empty($serviceImg)?$serviceImg->getImageInfo():url('assets/v2/images/background.jpg')); ?>" alt="" /></a>
                </div>
                <div class="lower-content">
                    <h4><a href="<?php echo e($service->slug); ?>"><?php echo e($service->name); ?></a></h4>
                    <div class="text">
                        <?php echo Str::limit(strip_tags($service->description), $limit = 150, $end = '...'); ?>

                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php endif; ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/v2/_what_we_do.blade.php ENDPATH**/ ?>