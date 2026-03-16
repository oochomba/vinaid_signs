	
	<?php $__env->startSection('content'); ?>

	<?php if(!empty($projects)): ?>
	<?php
	$myClasses=['col-lg-6','col-lg-3'];
	?>
	<!-- Project Page Section -->
	<div class="project-page-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="masonry-items-container-two row clearfix">
					<?php echo $__env->make($version.'projects._project_item',['projects'=>$projects,'myClasses'=>$myClasses], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Project Page Section -->
	<?php endif; ?>

	<div class="row">&nbsp;</div>


	<?php echo $__env->make($version.'_brand', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/v2/projects/index.blade.php ENDPATH**/ ?>