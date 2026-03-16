<?php $__env->startSection('styles'); ?>
    <style type="text/css">
        .perm-listing ul {
            display: block;
        }

        .perm-listing ul li {
            list-style: square;
        }
    </style>
<?php $__env->stopSection(); ?>

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
                        <li class="breadcrumb-item active">Permissions</li>
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
                    <div class="mt-2 mb-4">
                        <div class="row">
                            <div class="col-8">
                                <?php echo $__env->make('admin.layouts.partials._nav_links', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            </div>
                            <div class="col-4">
                                <?php if(Auth::guard('admin')->user()->can('permission.create')): ?>
                                    <a href="<?php echo e(url('admin/permission/add')); ?>"
                                        class="btn btn-sm btn-primary text-white pull-right"><i class="fa fa-plus"></i> Add
                                        permission
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="data-tables">
                        <table id="dataTable" class="table table-stripped table-condensed">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>S/N</th>
                                    <th>Group Name</th>
                                    <th>Permissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $permission_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $permissions = App\User::getpermissionsByGroupName($group->name);
                                    ?>
                                    <tr>
                                        <td> <?php echo e($loop->iteration); ?> </td>
                                        <td> <?php echo e($group->name); ?> </td>
                                        <td class="perm-listing">
                                            <ul>
                                                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <?php echo e($permission->name); ?>

                                                        
                                                        <?php if(Auth::guard('admin')->user()->can('permission.delete')): ?>
                                                            <span class="ml-2 mr-2">
                                                                <a class="text text-danger" style="cursor: pointer" id=""
                                                                    data-id="<?php echo e($permission->id); ?>"
                                                                    data-token=<?php echo e(csrf_token()); ?>

                                                                    data-href="<?php echo e(url('admin/permission/delete/' . $permission->id)); ?>"
                                                                    data-formId="delete-form-<?php echo e($permission->id); ?>"
                                                                    onclick="confirmClickedDyno(this)" title="Delete permission">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </span>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>


                </div>

            </div>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('assets/backend/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/admin/permissions/index.blade.php ENDPATH**/ ?>