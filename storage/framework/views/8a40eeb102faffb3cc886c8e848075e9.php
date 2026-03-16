<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
$projectImage = $project->getImageSingle($project->id);
?>
<!-- Project Block -->
<div class="project-block masonry-item <?php echo e(Request::segment(1)==1?$myClasses: $myClasses[array_rand($myClasses)]); ?> col-md-6 col-sm-12">
    <div class="inner-box">
        <div class="image">
            <a href="<?php echo e(url('detail/' . $project->slug)); ?>"><img src="<?php echo e(!empty($projectImage)?$projectImage->getImageInfo():url('assets/v2/images/background.jpg')); ?>" alt="<?php echo e($project->title); ?>" /></a>
            <div class="content">
                <h6><a href="<?php echo e(url('detail/' . $project->slug)); ?>"><?php echo e($project->title); ?></a></h6>
                <a class="arrow flaticon-right-arrow" href="<?php echo e(url('detail/' . $project->slug)); ?>"></a>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/v2/projects/_project_item.blade.php ENDPATH**/ ?>