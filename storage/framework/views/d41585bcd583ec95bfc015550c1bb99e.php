

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
                        <li class="breadcrumb-item"><a href="<?php echo e(url('admin/category/list')); ?>">Categories</a></li>
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
                        <h3 class="card-title">Edit category - <?php echo e(ucfirst($page_title)); ?></h3>
                    </div>
                    <form role="form" action="" method="post" class="form-horizontal"
                        enctype="multipart/form-data">
                        <div class="card-body">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <label class="col-2" for="name">Name <span class="text text-danger">*</span></label>
                                <div class="col-10">
                                    <input type="text" name="name"
                                        class="form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                        value="<?php echo e(old('name', $category->name)); ?>" id=""
                                        placeholder="Enter category name">
                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid feedback text text-danger" role="alert">
                                            <?php echo e($errors->first('name')); ?>.
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php
                                $rootCategories = App\Models\CategoryModel::tree();
                            ?>
                            <div class="form-group row">
                                <label class="col-sm-2" for="parent_id">Parent Category <span
                                        class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select
                                        class="form-control select2 <?php echo e($errors->has('parent_id') ? ' is-invalid' : ''); ?>"
                                        name="parent_id" id="parentCategory" required>
                                        <option value="0">None</option>
                                        <?php $__currentLoopData = $rootCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($child->id); ?>"
                                                <?php echo e($child->id == $category->parent_id ? 'selected' : ''); ?>>
                                                <?php echo e($child->name); ?>

                                            </option>
                                            <?php $__currentLoopData = $child->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subchild): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($subchild->id); ?>"
                                                    <?php echo e($subchild->id == $category->parent_id ? 'selected' : ''); ?>>
                                                    &nbsp;&nbsp;--<?php echo e($subchild->name); ?>

                                                </option>
                                                <?php $__currentLoopData = $subchild->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subchildx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($subchildx->id); ?>"
                                                        <?php echo e($subchildx->id == $category->parent_id ? 'selected' : ''); ?>>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;**<?php echo e($subchildx->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('parent_id')): ?>
                                        <span class="invalid feedback text text-danger" role="alert">
                                            <?php echo e($errors->first('parent_id')); ?>.
                                        </span>
                                    <?php endif; ?>

                                    <div id='getSubCategory'></div>

                                    <div id="getSubSubCategory"></div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Description <span class="text text-danger">*</span></label>
                                    <textarea name="description" class="form-control" id="ckeditor" cols="30" rows="10"><?php echo e($category->description); ?></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="status">Status <span class="text text-danger">*</span></label>
                                <select class="form-control select2 <?php echo e($errors->has('status') ? ' is-invalid' : ''); ?>"
                                    name="status" required>
                                    <option <?php echo e(old('status', $category->status) == 0 ? 'selected' : ''); ?> value="0">
                                        Active
                                    </option>
                                    <option <?php echo e(old('status', $category->status) == 1 ? 'selected' : ''); ?> value="1">
                                        Inative
                                    </option>
                                </select>
                                <?php if($errors->has('status')): ?>
                                    <span class="invalid feedback text text-danger" role="alert">
                                        <?php echo e($errors->first('status')); ?>.
                                    </span>
                                <?php endif; ?>
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

                            <?php if(!empty($category->getImage->count())): ?>
                                <div class="row pt-2" id="sortable">
                                    <?php $__currentLoopData = $category->getImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(!empty($image->getImageInfo())): ?>
                                            <div class="col-md-1 sortable_image" id="<?php echo e($image->id); ?>"
                                                style="text-align: center;">
                                                <img style="width: 100%;height:70px" src="<?php echo e($image->getImageInfo()); ?>"
                                                    alt="" />
                                                <a class="btn btn-danger btn-xs text-white mt-1" id=""
                                                    data-id="<?php echo e($image->id); ?>" data-token=<?php echo e(csrf_token()); ?>

                                                    data-redirectUrl="<?php echo e(url('admin/category/edit/' . $category->id)); ?>"
                                                    data-href="<?php echo e(url('admin/category/del_category_image/' . $image->id)); ?>"
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


                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_title">Meta Title <span class="text text-danger">*</span></label>
                                    <input type="text" name="meta_title"
                                        class="form-control <?php echo e($errors->has('meta_title') ? ' is-invalid' : ''); ?>"
                                        value="<?php echo e(old('meta_title', $category->meta_title)); ?>" id=""
                                        placeholder="Enter Meta Title">

                                    <?php if($errors->has('meta_title')): ?>
                                        <span class="invalid feedback text text-danger" role="alert">
                                            <?php echo e($errors->first('meta_title')); ?>.
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="" cols="20" rows="3" placeholder="Enter meta description"
                                        class="form-control <?php echo e($errors->has('meta_description') ? ' is-invalid' : ''); ?>"><?php echo e(old('meta_description', $category->meta_description)); ?></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_keywords">Meta Keywords</label>
                                    <input type="text" name="meta_keywords"
                                        class="form-control <?php echo e($errors->has('meta_keywords') ? ' is-invalid' : ''); ?>"
                                        value="<?php echo e(old('meta_keywords', $category->meta_keywords)); ?>" id=""
                                        placeholder="Enter Meta Keywords">
                                </div>
                            </div>

                            <div class="">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card -->



            </div>

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
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>