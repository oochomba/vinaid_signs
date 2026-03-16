<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <style>
        .table tr td {
            vertical-align: middle;
        }
    </style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(!empty($page_title) ? $page_title : config('siteconfig.sitename')); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Product Banners</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container-fluid">
            <?php echo $__env->make('admin.layouts.partials._message', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="alert alert-success jsMessShow" role="alert" style="display:none">

            </div>
            <div class="row">
                <div class="col-lg-12">

                    <?php if(!empty($banners)): ?>
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="card-title">Product Banners</h3>
                                    </div>
                                    <di class="col-6">
                                        <a href="<?php echo e(url('admin/add-banner')); ?>"
                                            class="btn btn-sm btn-primary text-white pull-right"><i class="fa fa-plus"></i>
                                            Add banner
                                        </a>
                                    </di>
                                </div>

                            </div>
                            <div class="card-body" style="overflow: auto">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Banner Image</th>
                                            <th>Product</th>
                                            <th>Type</th>
                                            <th>Caption</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                        $bannerImage = $banner->getImageSingle($banner->id);
                                                    ?>
                                                    <?php if(!empty($bannerImage)): ?>
                                                        <a href="<?php echo e($bannerImage->getImageInfo()); ?>" target="_blank">
                                                            <img style="height: 100px !important;  width: auto !important; object-fit: cover;"
                                                                src="<?php echo e($bannerImage->getImageInfo()); ?>"
                                                                alt="<?php echo e($banner->caption); ?>" class="product-image">
                                                        </a>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <p><a href="<?php echo e($banner->product_slug); ?>"
                                                            target="_blank"><?php echo e($banner->product_name); ?></a></p>
                                                </td>
                                                <td><?php echo e($banner->mapType($banner->type)); ?></td>
                                                <td> <?php echo e($banner->caption); ?> </td>
                                                <td><?php echo e($banner->short_description); ?>

                                                <td>
                                                    <?php if($banner->status == 1): ?>
                                                        <span for="" class="badge badge-warning">Inactive</span>
                                                    <?php else: ?>
                                                        <span for="" class="badge badge-success">Active</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td nowrap>
                                                        <a class="btn btn-info btn-xs"
                                                            href="<?php echo e(url('admin/edit-banner/' . $banner->id)); ?>">Edit</a>
                                                    <a class="btn btn-danger btn-xs"
                                                        data-href="<?php echo e(url('admin/delete-banner-record/' . $banner->id)); ?>"
                                                        data-id="<?php echo e($banner->id); ?>" data-token=<?php echo e(csrf_token()); ?>

                                                            data-formId="delete-form-<?php echo e($banner->id); ?>"
                                                            onclick="confirmDelete(this)" title="Delete Banner">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('assets/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
    <script type="text/javascript">
        $('.table').DataTable({
            "paging": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    </script>

    <script src="<?php echo e(url('assets/backend/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/admin/banner/list.blade.php ENDPATH**/ ?>