<?php $__env->startSection('styles'); ?>
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
                        <li class="breadcrumb-item active">Roles</li>
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
                                <?php if(Auth::guard('admin')->user()->can('role.add')): ?>
                                    <a href="<?php echo e(url('admin/roles/add')); ?>"
                                        class="btn btn-sm btn-primary text-white pull-right"><i class="fa fa-plus"></i> Add
                                        role
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="data-tables">
                        <table id="dataTable" class="table table-stripped table-condensed text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->index + 1); ?></td>
                                        <td><?php echo e($role->name); ?></td>
                                        <td>
                                            <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span class="badge badge-info mr-1">
                                                    <?php echo e($perm->name); ?>

                                                </span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php if(Auth::guard('admin')->user()->can('role.edit')): ?>
                                                <a class="btn btn-success btn-sm text-white"
                                                    href="<?php echo e(url('admin/roles/edit', $role->id)); ?>">Edit</a>
                                            <?php endif; ?>

                                            <?php if(Auth::guard('admin')->user()->can('role.delete')): ?>
                                                <a class="btn btn-sm btn-danger text-white" id=""
                                                    data-id="<?php echo e($role->id); ?>" data-token=<?php echo e(csrf_token()); ?>

                                                    data-href="<?php echo e(url('admin/roles/delete/' . $role->id)); ?>"
                                                    data-formId="delete-form-<?php echo e($role->id); ?>"
                                                    onclick="confirmDelete(this)" title="Delete role">
                                                    Delete
                                                </a>

                                                <form id="delete-form-<?php echo e($role->id); ?>"
                                                    action="<?php echo e(url('admin/roles/destroy', $role->id)); ?>" method="POST"
                                                    style="display: none;">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                </form>
                                            <?php endif; ?>
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

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/admin/roles/index.blade.php ENDPATH**/ ?>