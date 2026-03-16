<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(!empty($page_title) ? $page_title : config('siteconfig.sitename')); ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Customer Contacts</li>
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

                    <?php if(!empty($contacts)): ?>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Customer Contacts</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Sent On</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e(ucwords($customer->name)); ?></td>
                                                <td><?php echo e($customer->email); ?></td>
                                                <td> <?php echo e($customer->phone); ?> </td>
                                                <td><?php echo e($customer->subject); ?>

                                                <td><?php echo e($customer->message); ?></td>
                                                <td>
                                                    <?php
                                                        $formattedDate = \Illuminate\Support\Carbon::parse(
                                                            $customer->created_by,
                                                        )->format('d F Y');
                                                    ?>
                                                    <?php echo e($formattedDate); ?>

                                                </td>
                                                <td><a class="btn btn-info btn-sm"
                                                        href="mailto:<?php echo e($customer->email); ?>">Reply</a></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
                <?php endif; ?>


            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/backend/js/custom.js')); ?>"></script>
    <script>
        $(.table).DataTable({});
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/admin/customer_contacts.blade.php ENDPATH**/ ?>