<?php $__env->startSection('content'); ?>
<section class="page-title">
    <div class="auto-container">
        <!-- Icons Box -->
        <div class="icons-box parallax-scene-1" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <div class="icon-one" data-depth="0.10" style="transform: translate3d(9.8px, -3.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></div>
            <div class="icon-two" data-depth="0.30" style="transform: translate3d(29.4px, -9.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                <img src="<?php echo e(url('assets/v2/images/icons/vector-9.png')); ?>" alt="">
            </div>
            <div class="icon-three" data-depth="0.30" style="transform: translate3d(29.4px, -9.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                <img src="<?php echo e(url('assets/v2/images/icons/vector-34.png')); ?>" alt="">
            </div>
            <div class="icon-four" data-depth="0.10" style="transform: translate3d(9.8px, -3.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></div>
        </div>
        <h2>Page Not Found</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>Page Not Found</li>
        </ul>
    </div>
</section>



<div class="error-section pt-0">
    <div class="auto-container">
        <div class="content">
            <h1>404</h1>
            <h2>Oops... It looks like you ‘re lost !</h2>
            <div class="text">Oops! The page you are looking for does not exist. It might have been moved or deleted.</div>
            <div class="button-box">
                <a href="<?php echo e(url('')); ?>" class="theme-btn btn-style-three">
                    <span class="btn-wrap">
                        <span class="text-one">Go To Home</span>
                        <span class="text-two">Go To Home</span>
                    </span>
                    <span class="icon flaticon-right-arrow"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make($version.'_brand', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/errors/404.blade.php ENDPATH**/ ?>