

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
                        <li class="breadcrumb-item"><a href="<?php echo e(url('admin/banners')); ?>">Banners</a></li>
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
                        <h3 class="card-title">Edit banner - <?php echo e(ucfirst($page_title)); ?></h3>
                    </div>
                    <form role="form" action="" method="post" class="form-horizontal"
                        enctype="multipart/form-data">
                        <div class="card-body">
                            <?php echo e(csrf_field()); ?>

                            <?php
                                $banners = config('siteconfig.banner_type');
                            ?>
                            <div class="alert alert-info" role="alert">
                                Please take note of the banner size to mentain clarity.
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2" for="name">Banner Type <span
                                        class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="type" id="">
                                        <option value="">Select Banner Type</option>
                                        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e(old('type') == $key || $key == $banner->type ? 'selected' : ''); ?>

                                                value="<?php echo e($key); ?>">
                                                <?php echo e($value); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2" for="name">Caption e.g service title<span
                                        class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="caption"
                                        class="form-control <?php echo e($errors->has('caption') ? ' is-invalid' : ''); ?>"
                                        value="<?php echo e(old('caption', $banner->caption)); ?>" id="" required
                                        placeholder="Enter banner caption">

                                    <?php if($errors->has('caption')): ?>
                                        <span class="invalid feedback text text-danger" role="alert">
                                            <?php echo e($errors->first('caption')); ?>.
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2" for="status">Short Description <span
                                        class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea name="short_description" class="form-control <?php echo e($errors->has('short_description') ? ' is-invalid' : ''); ?>"
                                        id="" cols="30" rows="5"><?php echo e(old('short_description', $banner->short_description)); ?></textarea>
                                    <?php if($errors->has('short_description')): ?>
                                        <span class="invalid feedback text text-danger" role="alert">
                                            <?php echo e($errors->first('short_description')); ?>.
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2" for="name">Link To e.g link to a service, blog post etc <span
                                        class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group input-group-sm mb-2">
                                                <input type="text" class="form-control" id="searchProd"
                                                    value="<?php echo e(!empty(Request::get('q')) ? Request::get('q') : ''); ?>"
                                                    placeholder="Search for item to link">
                                                <span class="input-group-append">
                                                    <button type="button" id="searchProdBtn"
                                                        class="btn btn-info btn-flat">Search</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="text text-info mb-0">Search and link new service else keep the
                                                current</p>
                                            <p>Linked To: <span class="text text-info"><a
                                                        href="<?php echo e($banner->product_slug); ?>"
                                                        target="_blank"><?php echo e($banner->product_name); ?></a></span></p>
                                            <div id="searchResultAjax"></div>
                                            <p id="searchError" class="text text-danger"></p>
                                        </div>
                                    </div>
                                    <?php if($errors->has('product_id')): ?>
                                        <span class="invalid feedback text text-danger" role="alert">
                                            <?php echo e($errors->first('product_id')); ?>.
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-2" for="status">Status <span class="text text-danger">*</span></label>

                                <div class="col-10">
                                    <select class="form-control select2 <?php echo e($errors->has('status') ? ' is-invalid' : ''); ?>"
                                        name="status" required>
                                        <option <?php echo e(old('status', $banner->status) == 0 ? 'selected' : ''); ?> value="0">
                                            Active
                                        </option>
                                        <option <?php echo e(old('status', $banner->status) == 1 ? 'selected' : ''); ?> value="1">
                                            Inative
                                        </option>
                                    </select>
                                    <?php if($errors->has('status')): ?>
                                        <span class="invalid feedback text text-danger" role="alert">
                                            <?php echo e($errors->first('status')); ?>.
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-12 pb-3 pt-2">
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Images <span
                                            class="text text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image[]" multiple accept="image/*"
                                                class="custom-file-input" style="opacity: 100;padding:4px"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <?php if(!empty($banner->getImage->count())): ?>
                                <div class="row pt-2" id="sortable">
                                    <?php $__currentLoopData = $banner->getImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(!empty($image->getImageInfo())): ?>
                                            <div class="col-md-1 sortable_image" id="<?php echo e($image->id); ?>"
                                                style="text-align: center;">
                                                <img style="width: 100%;height:70px" src="<?php echo e($image->getImageInfo()); ?>"
                                                    alt="" />
                                                <a class="btn btn-danger btn-xs text-white mt-1" id=""
                                                    data-redirectUrl=<?php echo e(url('admin/edit-banner/' . $banner->id)); ?>

                                                    data-id="<?php echo e($image->id); ?>" data-token=<?php echo e(csrf_token()); ?>

                                                    data-href="<?php echo e(url('admin/delete-banner/' . $image->id)); ?>"
                                                    data-formId="delete-form-<?php echo e($image->id); ?>"
                                                    onclick="confirmDelete(this)" title="Delete Image">
                                                    Delete
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                            <div class="col-12">
                                <hr>
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

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/admin/banner/edit.blade.php ENDPATH**/ ?>