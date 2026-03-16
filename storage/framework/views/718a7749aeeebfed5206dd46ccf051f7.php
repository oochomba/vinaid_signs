<?php $__env->startSection('styles'); ?>
    <style type="text/css">
        .my-anchor a:hover,
        .my-anchor {
            text-decoration: underline;
            color: unset;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">
                Our Completed Projects
            </h1>
        </div>
    </div>

    <?php echo $__env->make($version . '_facts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="container mt-4">
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-left mb-0">
                <li class="breadcrumb-item"><a href="<?php echo e(url('')); ?>">Home</a></li>
                <li class="breadcrumb-item">Projects </li>
            </ol>
        </nav>
    </div>




    <?php if(!empty($projects)): ?>
        <div class="container-fluid projects py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Our Projects</h5>
                    <h1>Our Recently Completed Projects</h1>
                </div>
                <div class="row g-5">
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $projectImage = $project->getImageSingle($project->id);
                        ?>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="<?php echo e(!empty($projectImage) ? url($projectImage->getImageInfo()) : ''); ?>"
                                        class="img-fluid w-100 rounded" alt="<?php echo e($project->title); ?>"
                                        style="width: 310px; height:254px;">
                                    <div class="project-content">
                                        <a href="<?php echo e(url('detail/' . $project->slug)); ?>" class="text-center">
                                            <h4 class="text-secondary"><?php echo e($project->category_name); ?></h4>
                                            <p class="m-0 text-white"><?php echo e($project->title); ?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($version . 'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/v1/projects/index.blade.php ENDPATH**/ ?>