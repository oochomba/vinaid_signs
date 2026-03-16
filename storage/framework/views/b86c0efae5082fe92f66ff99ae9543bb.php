	<?php if(!empty($galleryImages)): ?>
	<?php
	$myClasses=['col-lg-6','col-lg-3']
	?>
	<div class="project-page-section">
	    <div class="auto-container">
	        <div class="inner-container">
	            <div class="masonry-items-container-two row clearfix" style="position: relative; height: 1280.27px;">
	                <?php $__currentLoopData = $galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galleryImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	                <div class="project-block masonry-item <?php echo e($myClasses[array_rand($myClasses)]); ?> col-md-6 col-sm-12" style="position: absolute; left: 672px; top: 1008px;">
	                    <div class="inner-box">
	                        <div class="image">
	                            <a href="<?php echo e($galleryImage->getCategory->parent_id==0?url($galleryImage->getCategory->slug):url($galleryImage->getParent($galleryImage->getCategory->parent_id)->slug.'/'.$galleryImage->getCategory->slug)); ?>"><img src="<?php echo e(url($galleryImage->getImageInfo())); ?>" alt=""></a>
	                            <div class="content">
	                                <h6><a href="<?php echo e($galleryImage->getCategory->parent_id==0?url($galleryImage->getCategory->slug):url($galleryImage->getParent($galleryImage->getCategory->parent_id)->slug.'/'.$galleryImage->getCategory->slug)); ?>"><?php echo e($galleryImage->getCategory->name); ?></a></h6>
	                                <a class="arrow flaticon-right-arrow" href="<?php echo e($galleryImage->getCategory->parent_id==0?url($galleryImage->getCategory->slug):url($galleryImage->getParent($galleryImage->getCategory->parent_id)->slug.'/'.$galleryImage->getCategory->slug)); ?>"></a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            </div>
	        </div>
	    </div>
	</div>
	<?php endif; ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/v2/portfolio/_portifolio.blade.php ENDPATH**/ ?>