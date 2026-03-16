<?php if(Auth::guard('admin')->user()->can('admin.view')): ?>
    <a href="<?php echo e(url('admin/admin/list')); ?>" class="btn btn-info btn-sm">Admins</a>
<?php endif; ?>
<?php if(Auth::guard('admin')->user()->can('role.view')): ?>
    <a href="<?php echo e(url('admin/roles')); ?>" class="btn btn-success btn-sm">Roles</a>
<?php endif; ?>
<?php if(Auth::guard('admin')->user()->can('permission.view')): ?>
    <a href="<?php echo e(url('admin/permission')); ?>" class="btn btn-danger btn-sm">Permissions</a>
<?php endif; ?>
<?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/admin/layouts/partials/_nav_links.blade.php ENDPATH**/ ?>