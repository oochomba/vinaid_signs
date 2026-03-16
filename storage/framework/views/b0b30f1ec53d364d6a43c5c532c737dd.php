<?php $__env->startSection('styles'); ?>
    <style>
        .form-check-label {
            text-transform: capitalize;
        }

        .perm-listing ul {
            display: block
        }

        .perm-listing ul li {
            /* display: inline-block !important; */
            vertical-align: top;
            list-style: none;
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
                        <li class="breadcrumb-item active"><a href="<?php echo e(url('admin/roles')); ?>">Roles</a></li>
                        <li class="breadcrumb-item active">Edit role - $role->name</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->







    <!-- page title area end -->
    <div class="content">
        <div class="container-fluid">

            <!-- data table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Edit Role</h4>
                        <?php echo $__env->make('admin.layouts.partials._message', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                        <form action="<?php echo e(url('admin/roles/edit', $role->id)); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label for="name">Role Name</label>
                                <input type="text" class="form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                    id="name" value="<?php echo e($role->name); ?>" name="name"
                                    placeholder="Enter a Role Name">
                                <?php if($errors->has('name')): ?>
                                    <span class="invalid feedback text text-danger" role="alert">
                                        <?php echo e($errors->first('name')); ?>.
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label for="name">Permissions</label>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkPermissionAll" value="1"
                                        <?php echo e(App\User::roleHasPermissions($role, $all_permissions) ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="checkPermissionAll">All</label>
                                </div>
                                <hr>


                                <div class="row">
                                    <?php $i = 1; ?>
                                    <?php $__currentLoopData = $permission_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-3 perm-listing">
                                            <ul class="row">
                                                <?php
                                                    $permissions = App\User::getpermissionsByGroupName($group->name);
                                                    $j = 1;
                                                ?>

                                                <li style="font-weight:600;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="<?php echo e($i); ?>Management" value="<?php echo e($group->name); ?>"
                                                            onclick="checkPermissionByGroup('role-<?php echo e($i); ?>-management-checkbox', this)"
                                                            <?php echo e(App\User::roleHasPermissions($role, $permissions) ? 'checked' : ''); ?>>
                                                        <label class="form-check-label"
                                                            for="checkPermission"><?php echo e($group->name); ?></label>
                                                    </div>
                                                </li>

                                                <li class="" style="margin-left: 15%">
                                                    <div class="role-<?php echo e($i); ?>-management-checkbox">

                                                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    onclick="checkSinglePermission('role-<?php echo e($i); ?>-management-checkbox', '<?php echo e($i); ?>Management', <?php echo e(count($permissions)); ?>)"
                                                                    name="permissions[]"
                                                                    <?php echo e($role->hasPermissionTo($permission->name) ? 'checked' : ''); ?>

                                                                    id="checkPermission<?php echo e($permission->id); ?>"
                                                                    value="<?php echo e($permission->name); ?>">
                                                                <label class="form-check-label"
                                                                    for="checkPermission<?php echo e($permission->id); ?>"><?php echo e($permission->name); ?></label>
                                                            </div>
                                                            <?php  $j++; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <br>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <?php  $i++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>


                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update Role</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- data table end -->

        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <?php echo $__env->make('admin.roles.partials.scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/admin/roles/edit.blade.php ENDPATH**/ ?>