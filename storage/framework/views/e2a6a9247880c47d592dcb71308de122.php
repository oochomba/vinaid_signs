<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make($version.'page._page_title', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php if(!empty($page->description)): ?>
<div class="auto-container">
    <div class="row clearfix">
        <!-- Content Side -->
        <div class="content-side col-xl-12 col-lg-12  col-md-12 col-sm-12">
            <!-- Service Detail -->
            <div class="service-detail page-detail">
                <div class="inner-box">
                    <div class="lower-content">
                        <div class="lower-content sec-title">
                            <?php echo $page->description; ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php else: ?>
<?php echo $__env->make($version.'page.404', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/v2/page/privacy_policy.blade.php ENDPATH**/ ?>