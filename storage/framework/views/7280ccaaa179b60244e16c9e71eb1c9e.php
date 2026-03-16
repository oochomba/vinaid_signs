	
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
			<h2>Our Services</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?php echo e(url('')); ?>">Home</a></li>
				<li>Services</li>
			</ul>
		</div>
	</section>
	<!-- End Page Title -->


	<section class="services-section-four">
		<div class="color-one"></div>
		<div class="color-two"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div>
						<div class="title">Ready to kick start your business? <?php echo e($setting->website_name); ?> is ready to sort you</div>
						<h2>Provide <span>Stuning </span> <br> services for your business</h2>
					</div>

					<div>
						<div class="text">Design, Printing, Branding & Signage <br> for your company, business, organization, institution etc <br> at an affordable price</div>
					</div>
				</div>
			</div>

			<!-- Inner Container -->
			<?php if(!empty($rootCategories)): ?>
			<div class="inner-container custom-inner-container">
				<div class="row">
					<?php $__currentLoopData = $rootCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php
					$serviceImg = $service->getImageSingle($service->id);
					?>
					<div class="col-md-4 service-block-four">
						<div class="inner-box custom-inner-box">
							<div class="image my-service custom-my-service">
								<a href="<?php echo e($service->slug); ?>"><img src="<?php echo e(!empty($serviceImg)?$serviceImg->getImageInfo():url('assets/v2/images/background.jpg')); ?>" alt="" /></a>
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

			<?php endif; ?>

		</div>
	</section>

	<?php echo $__env->make($version.'_brand', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/v2/product/all.blade.php ENDPATH**/ ?>