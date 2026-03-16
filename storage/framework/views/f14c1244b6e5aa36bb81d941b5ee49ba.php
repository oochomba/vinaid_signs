<?php $__env->startSection('styles'); ?>
    <style type="text/css">
        .breadcrumbs nav ol {
            justify-content: left;
        }

        .list-wrap {
            min-height: 220px;
        }

        .list-wrap .icon img {
            width: 70px !important;
        }

        .list-wrap p {
            overflow: visible;
        }

        .list-wrap {
            display: flex;
            margin-bottom: 20px;
            background: #fafafa;
            border-radius: 8px;
            padding: 20px;
            transition: 0.2s;
        }

        .list-wrap:hover {
            transform: translateY(-7px) !important;
        }

        .list-wrap p {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            /* -webkit-line-clamp: 2; */
            -webkit-box-orient: vertical;
        }

        .list-wrap:nth-child(3),
        .list-wrap:nth-child(6) {
            margin-bottom: 0;
        }

        .featured .icon {
            width: 142px;
            text-align: center;
            margin-right: 5px;
            margin-bottom: 20px;
        }

        .featured .icon img {
            /* width: 100%; */
            max-width: 70px;
            margin-right: 5px;
            width: 70px;
        }

        .list-center-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
            height: 100%;
            flex-direction: column;
        }

        .list-center-wrap img {
            width: 100%;
        }

        .center-icon {
            width: 170px;
            text-align: center;
        }

        .center-icon svg {
            width: 100%;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid page-header py-5" style="background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(<?php echo e($page->getImageInfo()); ?>) center center no-repeat;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown"><?php echo e(!empty($page->title)?$page->title:'Page not found'); ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('')); ?>">Home</a></li>

                    <li class="breadcrumb-item" aria-current="page"><?php echo e(!empty($page->title)?$page->title:'Page not found'); ?></li>
                </ol>
            </nav>
        </div>
    </div>


    <?php echo $__env->make($version.'_facts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="container-fluid pb-0 mb-0 team">
        <div class="container pb-5">
            <br>
            <?php if(!empty($page->description)): ?>
            <?php echo $page->description; ?>

            <?php else: ?>
            <div class="pt-3 mt-3 wow fadeIn" data-wow-delay=".3s">
                <h2 class="text-primary">Sorry!! Page not found</h2>
            </div>
            <?php endif; ?>
            <br>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/v1/page/privacy_policy.blade.php ENDPATH**/ ?>