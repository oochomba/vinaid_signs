	
	<?php $__env->startSection('content'); ?>
	<!-- Page Title -->
	<section class="page-title">
		<div class="auto-container">
			<!-- Icons Box -->
			<div class="icons-box parallax-scene-1">
				<div class="icon-one" data-depth="0.10"></div>
				<div class="icon-two" data-depth="0.30">
					<img src="images/icons/vector-9.png" alt="" />
				</div>
				<div class="icon-three" data-depth="0.30">
					<img src="images/icons/vector-34.png" alt="" />
				</div>
				<div class="icon-four" data-depth="0.10"></div>
			</div>
			<h2><?php echo e($category->name); ?></h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?php echo e(url('')); ?>">Home</a></li>
				<li><a href="<?php echo e(url('services')); ?>">Services</a></li>
				<?php if(!empty($root_category)): ?>
				<li class="breadcrumb-item">
					<a href="<?php echo e(url($root_category->slug)); ?>"><?php echo e($root_category->name); ?></a>
				</li>
				<?php endif; ?>
				<?php if(!empty($sub_root_category)): ?>
				<li class="breadcrumb-item">
					<a href="<?php echo e(url($root_category->slug . '/' . $sub_root_category->slug)); ?>">
						<?php echo e($sub_root_category->name); ?>

					</a>
				</li>
				<?php endif; ?>
				<li class="breadcrumb-item">
					<?php echo e($category->name); ?>

				</li>
			</ul>
		</div>
	</section>
	<!-- End Page Title -->



	<div class="sidebar-page-container">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Content Side -->
				<div class="content-side <?php echo e(isset($root_category)&&!empty($root_category)?'col-xl-9 col-lg-8':'col-xl-12 col-lg-12'); ?>  col-md-12 col-sm-12">
					<!-- Service Detail -->
					<div class="service-detail page-detail">
						<div class="inner-box">
							<?php
							$serviceImg = $category->getImageSingle($category->id);
							?>

							<?php if(!empty($serviceImg)): ?>
							<div class="image">
								<img src="<?php echo e(url($serviceImg->getImageInfo())); ?>" alt="" />
							</div>

							<?php endif; ?>

							<div class="lower-content">
								<h3><?php echo e($category->name); ?></h3>
								<?php echo $category->description; ?>

							</div>
						</div>
					</div>

					<?php
					$subCategories = App\Models\CategoryModel::getSubCategoriesByParentId($category->id);
					?>

					<?php if(!empty($subCategories->count())): ?>
					<div class="shops-outer">
						<div class="row clearfix">

							<?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="shop-item col-lg-3 col-md-4 col-sm-6">
								<div class="inner-box">
									<div class="image">
										<?php
										$subCategoryImage = $subCategory->getImageSingle($subCategory->id);
										?>
										<a href="<?php echo e($category->slug . '/' . $subCategory->slug); ?>"><img src="<?php echo e(!empty($subCategoryImage)?url($subCategoryImage->getImageInfo()):url('assets/v2/images/background.jpg')); ?>" alt=""></a>
									</div>
									<div class="lower-content">
										<h6><a href="<?php echo e($category->slug . '/' . $subCategory->slug); ?>"><?php echo e($subCategory->name); ?></a></h6>
									</div>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
					<?php endif; ?>

					<?php if(!empty($category)): ?>
					<?php
					$categoryImages=$category->getImage;
					?>
					<?php if(!empty($categoryImages->count()&&$categoryImages->count()>1)): ?>
					<section class="services-section-six">
						<div class="auto-container">
							<div class="sec-title centered">
								<h2><span><?php echo e($category->name); ?></span> Portfolio </h2>
							</div>
							<div class="">
								<div class="row">
									<?php $__currentLoopData = $categoryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($loop->iteration!==1): ?>
									<div class="col-lg-3">
										<a href="<?php echo e(url($categoryImage->getImageInfo())); ?>" class="lightbox-image">
											<img
												src="<?php echo e(url($categoryImage->getImageInfo())); ?>"
												alt="<?php echo e($category->name); ?>"
												class="w-100 mb-2 mb-md-4 shadow-1-strong rounded" />
										</a>
									</div>
									<?php endif; ?>

									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
							</div>
						</div>
					</section>
					<?php endif; ?>

					<?php endif; ?>






				</div>

				<?php if(isset($root_category)&&!empty($root_category)): ?>

				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<?php if(isset($getSubCategoryFilter) && !empty($getSubCategoryFilter)): ?>

					<aside class="sidebar sticky-top">

						<!-- Services Widget -->
						<div class="sidebar-widget services-widget">
							<div class="widget-content">

								<!-- Category List Three -->
								<ul class="category-list-three">
									<?php $__currentLoopData = $getSubCategoryFilter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li class="<?php echo e($related->slug==$category->slug?'current':''); ?>"><a href="<?php echo e($related->slug==$category->slug?'#': url($root_category->slug.'/'.$related->slug)); ?>"><?php echo e($related->name); ?></a></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>

							</div>
						</div>
					</aside>
					<?php endif; ?>

				</div>

				<?php endif; ?>


			</div>
		</div>
	</div>

	<?php echo $__env->make($version.'_brand', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/v2/product/index.blade.php ENDPATH**/ ?>