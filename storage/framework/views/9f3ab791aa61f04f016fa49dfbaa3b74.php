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
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('')); ?>">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>


    <?php echo $__env->make($version.'_facts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make($version.'_about_intro', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


    <div class="container-fluid pb-0 mb-0 team">
        <div class="container pb-5">
            <div class="pb-5 wow fadeIn" data-wow-delay=".3s">
                <h1>Our Key Aspects:</h1>
            </div>

            <div class="wow fadeIn" data-wow-delay=".5s">
                <ul>
                    <li>
                        <h4 class="title"><span class="small-text">Creative Design Aproach</span></h4>
                        <p>
                            Make your signage dreams come to life! We're excited to embark on this creative journey
                            with you and bring your vision to reality. You give us the task, we do everthing you
                            need.
                        </p>
                    </li>
                    <li>
                        <h4 class="title"><span class="small-text">Unparalleled Craftsmanship</span></h4>
                        <p>
                            Crafting exceptional signage isn't just a job for us; it's our passion and our craft. We
                            understand that every sign we create is a reflection of your brand and a vital component
                            of your visual identity.
                        </p>
                    </li>
                    <li>
                        <h4 class="title"><span class="small-text">Dedication to Excellence</span></h4>
                        <p>
                            We are commited to achieving the highest standards in all aspects of our work and
                            endeavors going above and beyond, exceeding expectations, and consistently delivering
                            exceptional results
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <?php echo $__env->make($version.'_why_us', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/v1/about.blade.php ENDPATH**/ ?>