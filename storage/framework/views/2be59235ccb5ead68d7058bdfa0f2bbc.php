	
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
					<img src="<?php echo e(url('assets/v2images/icons/vector-34.png')); ?>" alt="">
				</div>
				<div class="icon-four" data-depth="0.10" style="transform: translate3d(9.8px, -3.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></div>
			</div>
			<h2><?php echo e(!empty($meta_title)?$meta_title:'Our Portfolio'); ?></h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?php echo e(url('')); ?>">Home</a></li>
				<li><?php echo e(!empty($meta_title)?$meta_title:'Our Portfolio'); ?></li>
			</ul>
		</div>
	</section>


	<?php if(!empty($galleryImages)): ?>
	<?php
	$myClasses=['col-lg-6','col-lg-3']
	?>
	<div class="project-page-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="masonry-items-container-two row clearfix" style="position: relative; height: 1280.27px;">
					<?php echo $__env->make($version.'portfolio._portfolio',['galleryImages'=>$galleryImages], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>


	<!-- Brand Section -->
	<?php echo $__env->make($version.'_brand', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	<!-- End Brand Section -->
	<?php $__env->stopSection(); ?>
<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/v2/portfolio/index.blade.php ENDPATH**/ ?>