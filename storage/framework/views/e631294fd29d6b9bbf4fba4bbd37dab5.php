<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(!empty($page_title) ? $page_title : 'Ecommerce'); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo e(ucfirst($page_title)); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container-fluid">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit setting - <?php echo e(ucfirst($page_title)); ?></h3>
                    </div>
                    <form role="form" action="" method="post" class="form-horizontal">
                        <div class="card-body">
                            <?php echo e(csrf_field()); ?>

                            <div class="col-12 col-lg-12">
                                <div class="row custom-bg">
                                    <div class="col-12 form-group">
                                        <label class="" for="name">Website Name <span
                                                class="text text-danger">*</span></label>
                                        <input type="text" name="name"
                                            class="form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                            value="<?php echo e(old('name', !empty($smtp_setting->name) ? $smtp_setting->name : '')); ?>"
                                            id="" required placeholder="">

                                        <?php if($errors->has('name')): ?>
                                            <span class="invalid feedback text text-danger" role="alert">
                                                <?php echo e($errors->first('name')); ?>.
                                            </span>
                                        <?php endif; ?>
                                    </div>


                                    <div class="col-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_mailer">Mail Mailer (e.g smtp)<span
                                                        class="text text-danger">*</span></label>
                                                <input type="text" name="mail_mailer"
                                                    class="form-control <?php echo e($errors->has('mail_mailer') ? ' is-invalid' : ''); ?>"
                                                    value="<?php echo e(old('mail_mailer', !empty($smtp_setting->mail_mailer) ? $smtp_setting->mail_mailer : '')); ?>"
                                                    id="" required placeholder="">

                                                <?php if($errors->has('mail_mailer')): ?>
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        <?php echo e($errors->first('mail_mailer')); ?>.
                                                    </span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_host">Mail Host <span
                                                        class="text text-danger">*</span></label>
                                                <input type="tel" name="mail_host"
                                                    class="form-control <?php echo e($errors->has('mail_host') ? ' is-invalid' : ''); ?>"
                                                    value="<?php echo e(old('mail_host', !empty($smtp_setting->mail_host) ? $smtp_setting->mail_host : '')); ?>"
                                                    id="" placeholder="" required>

                                                <?php if($errors->has('mail_host')): ?>
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        <?php echo e($errors->first('mail_host')); ?>.
                                                    </span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_port">Mail Port <span
                                                        class="text text-danger">*</span></label>
                                                <input type="text" name="mail_port"
                                                    class="form-control <?php echo e($errors->has('mail_port') ? ' is-invalid' : ''); ?>"
                                                    value="<?php echo e(old('mail_port', !empty($smtp_setting->mail_port) ? $smtp_setting->mail_port : '')); ?>"
                                                    id="" required placeholder="" required>

                                                <?php if($errors->has('mail_port')): ?>
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        <?php echo e($errors->first('mail_port')); ?>.
                                                    </span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_username">Mail Username <span
                                                        class="text text-danger">*</span></label>
                                                <input type="text" name="mail_username"
                                                    class="form-control <?php echo e($errors->has('email_two') ? ' is-invalid' : ''); ?>"
                                                    value="<?php echo e(old('mail_username', !empty($smtp_setting->mail_username) ? $smtp_setting->mail_username : '')); ?>"
                                                    id="" placeholder="" required>

                                                <?php if($errors->has('mail_username')): ?>
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        <?php echo e($errors->first('mail_username')); ?>.
                                                    </span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_password">Mail Password <span
                                                        class="text text-danger">*</span></label>
                                                <input type="text" name="mail_password"
                                                    class="form-control <?php echo e($errors->has('email_two') ? ' is-invalid' : ''); ?>"
                                                    value="<?php echo e(old('mail_password', !empty($smtp_setting->mail_password) ? $smtp_setting->mail_password : '')); ?>"
                                                    id="" placeholder="" required>

                                                <?php if($errors->has('mail_password')): ?>
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        <?php echo e($errors->first('mail_password')); ?>.
                                                    </span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_encryption">Mail Encryption <span
                                                        class="text text-danger">*</span></label>
                                                <input type="text" name="mail_encryption"
                                                    class="form-control <?php echo e($errors->has('email_two') ? ' is-invalid' : ''); ?>"
                                                    value="<?php echo e(old('mail_encryption', !empty($smtp_setting->mail_encryption) ? $smtp_setting->mail_encryption : '')); ?>"
                                                    id="" placeholder="">

                                                <?php if($errors->has('mail_encryption')): ?>
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        <?php echo e($errors->first('mail_encryption')); ?>.
                                                    </span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_from_address">Mail From Address <span
                                                        class="text text-danger">*</span></label>
                                                <input type="text" name="mail_from_address"
                                                    class="form-control <?php echo e($errors->has('mail_from_address') ? ' is-invalid' : ''); ?>"
                                                    value="<?php echo e(old('mail_from_address', !empty($smtp_setting->mail_from_address) ? $smtp_setting->mail_from_address : '')); ?>"
                                                    id="" placeholder="" required>

                                                <?php if($errors->has('mail_from_address')): ?>
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        <?php echo e($errors->first('mail_from_address')); ?>.
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
        </div>

    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('assets/backend/js/custom.js')); ?>"></script>
    <script src="<?php echo e(url('assets/backend/js/jquery-ui.js')); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sortable").sortable({
                update: function(event, ui) {
                    var photo_id = new Array();
                    $('.sortable_image').each(function() {
                        var id = $(this).attr('id');
                        photo_id.push(id)
                    });
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(url('admin/product_image_sortable')); ?>",
                        data: {
                            "photo_id": photo_id,
                            "_token": "<?php echo e(csrf_token()); ?>"
                        },
                        dataType: "json",
                        success: function(data) {

                        },
                        error: function(data) {

                        }
                    });

                }
            });
        });


        $('body').delegate('#searchProdBtn', 'click', function(e) {
            var value = $('#searchProd').val();
            searchProducttAjax(value);
        });

        $('#searchProd').on('keyup', function() {
            var value = $(this).val();
            searchProducttAjax(value);
        })

        function searchProducttAjax(value) {
            if (value.length >= 3) {
                $('#searchError').html('');
                $.ajax({
                    type: 'POST',
                    url: "<?php echo e(url('admin/search-product')); ?>",
                    data: {
                        'q': value,
                        "_token": "<?php echo e(csrf_token()); ?>"

                    },
                    success: function(data) {
                        $('#searchResultAjax').html(data.success);
                        // $('#searchResultAjax').append(data.success);
                        console.log(data);
                        // $('tbody').html(data);
                    }
                });
            } else {
                $('#searchError').html('Pleace enter at least 3 characters to search');
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/admin/setting/smtp.blade.php ENDPATH**/ ?>