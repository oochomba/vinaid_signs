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
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/v2/portfolio/_portfolio.blade.php ENDPATH**/ ?>