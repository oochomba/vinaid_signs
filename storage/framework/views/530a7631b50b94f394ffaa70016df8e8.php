

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(!empty($page_title) ? $page_title : 'Ecommerce'); ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Product Categories</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="content">
        <div class="container-fluid">
            <?php echo $__env->make('admin.layouts.partials._message', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="alert alert-success jsMessShow" role="alert" style="display:none">

            </div>
            <div class="row">
                <div class="col-lg-12">



                    <?php if(!empty($categories)): ?>
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="card-title">Categories List</h3>

                                    </div>
                                    <div class="col-6">
                                        <?php if(Auth::guard('admin')->user()->can('category.create')): ?>
                                            <a href="<?php echo e(url('admin/category/add')); ?>"
                                                class="btn btn-sm btn-info text-white pull-right"><i class="fa fa-plus"></i>
                                                Add new
                                                category</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <?php if(!empty($categories)): ?>
                                    <ul class="heading-category">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="pb-3"><?php echo e($category->name); ?>

                                                <?php if(Auth::guard('admin')->user()->can('category.delete')): ?>
                                                    <a href="<?php echo e(url('admin/category/edit/' . $category->id)); ?>">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                <?php endif; ?>
                                                &nbsp;
                                                <?php if(Auth::guard('admin')->user()->can('category.delete')): ?>
                                                    <a class="text text-danger" style="cursor: pointer"
                                                        id="" data-id="<?php echo e($category->id); ?>"
                                                        data-token=<?php echo e(csrf_token()); ?>

                                                        data-href="<?php echo e(url('admin/category/delete/' . $category->id)); ?>"
                                                        onclick="confirmDelete(this)"
                                                        title="Delete category">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                <?php endif; ?>
                                                <ul>
                                                    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <?php echo e($children->name); ?>

                                                            <?php if(Auth::guard('admin')->user()->can('category.delete')): ?>
                                                                <a href="<?php echo e(url('admin/category/edit/' . $children->id)); ?>">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                            <?php endif; ?>
                                                            &nbsp;
                                                            <?php if(Auth::guard('admin')->user()->can('category.delete')): ?>
                                                                <a class="text text-danger" style="cursor: pointer"
                                                                    id="" data-id="<?php echo e($children->id); ?>"
                                                                    data-token=<?php echo e(csrf_token()); ?>

                                                                    data-href="<?php echo e(url('admin/category/delete/' . $children->id)); ?>"
                                                                    onclick="confirmDelete(this)"
                                                                    title="Delete category">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            <?php endif; ?>

                                                            <ul>
                                                                <?php $__currentLoopData = $children->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li><?php echo e($child->name); ?>

                                                                        <?php if(Auth::guard('admin')->user()->can('category.delete')): ?>
                                                                            <a
                                                                                href="<?php echo e(url('admin/category/edit/' . $child->id)); ?>">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
                                                                        <?php endif; ?>
                                                                        &nbsp;
                                                                        <?php if(Auth::guard('admin')->user()->can('category.delete')): ?>
                                                                            <a class="text text-danger" style="cursor: pointer"
                                                                                id="" data-id="<?php echo e($category->id); ?>"
                                                                                data-token=<?php echo e(csrf_token()); ?>

                                                                                data-href="<?php echo e(url('admin/category/delete/' . $child->id)); ?>"
                                                                                onclick="confirmDelete(this)"
                                                                                title="Delete category">
                                                                                <i class="fa fa-trash"></i>
                                                                            </a>
                                                                        <?php endif; ?>
                                                                    </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                </div>
                <?php endif; ?>


            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('assets/backend/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/admin/category/list.blade.php ENDPATH**/ ?>