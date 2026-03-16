<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo e(!empty($meta_title)?$meta_title.' | ':''); ?> <?php echo e(!empty($setting->website_name)?$setting->website_name:''); ?></title>
    <?php if(!empty($meta_description)): ?>
    <meta name="description" content="<?php echo e($meta_description); ?>">
    <?php endif; ?>
    <?php if(!empty($meta_keywords)): ?>
    <meta name="keywords" content="<?php echo e($meta_keywords); ?>">
    <?php endif; ?>

    <link rel="shortcut icon" href="<?php echo e($setting->getFavicon()); ?>">
    <link rel="icon" href="<?php echo e($setting->getFavicon()); ?>">

    <link rel="stylesheet" href="<?php echo e(url('assets/plugins/fontawesome/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo e(url('assets/dist/css/adminlte.min.css')); ?>">
    <link href="<?php echo e(url('assets/backend/css/select2.min.css')); ?>" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style type="text/css">
        .ck-editor__editable[role="textbox"] {
            /* Editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* Block images */
            max-width: 80%;
            margin: 20px auto;
        }

        .ck-content .image {
            /* Block images */
            max-width: 80%;
            margin: 20px auto;
        }

        .custom-bg {
            background: #f4f6f9;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            padding: 6px;
            margin-bottom: 2rem;
        }

        [class*=sidebar-dark] .brand-link {
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .select2-container .select2-selection--single {
            height: 34px;
        }
        .fl-wrapper{
            z-index: 1036 !important;
        }
    </style>
    <?php echo $__env->yieldContent('styles'); ?>
    <script>
        jsConfig = {};
        jsConfig.base = "<?php echo e(env('APP_URL')); ?>"
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php echo $__env->make('admin.layouts.partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <?php echo $__env->make('admin.layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <script src="<?php echo e(url('assets/plugins/jquery/jquery.min.js')); ?>"></script>

    <script src="<?php echo e(url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/dist/js/adminlte.js')); ?>"></script>

    <script src="<?php echo e(url('assets/filesManagement/ckeditor/ckeditor.js')); ?>"></script>

    <script src="<?php echo e(url('assets/plugins/chart.js/Chart.min.js')); ?>"></script>

    <script src="<?php echo e(url('assets/backend/js/select2.min.js')); ?>"></script>

    <script src="<?php echo e(url('assets/backend/js/sweetalert.min.js')); ?>"></script>

    <script src="<?php echo e(url('assets/dist/js/demo.js')); ?>"></script>
    <script src="<?php echo e(url('assets/dist/js/pages/dashboard3.js')); ?>"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(".list_style_1").append('<i class="fa fa-check"></i>');
            $('.select2').select2();
        })

        $(document).ready(function() {
            var txtContent = document.getElementById("ckeditor");
            if (txtContent !== null) {
                CKEDITOR.replace(txtContent);
            }

            var txtContent1 = document.getElementById("ckeditor1");
            if (txtContent1 !== null) {
                CKEDITOR.replace(txtContent1);
            }
        });
    </script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>