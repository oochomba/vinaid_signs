<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(!empty($meta_title)?$meta_title.' | ':''); ?> <?php echo e(!empty($setting->website_name)?$setting->website_name:''); ?></title>
    <?php if(!empty($meta_description)): ?>
    <meta name="description" content="<?php echo e($meta_description); ?>">
    <?php endif; ?>
    <?php if(!empty($meta_keywords)): ?>
    <meta name="keywords" content="<?php echo e($meta_keywords); ?>">
    <?php endif; ?>

    <link rel="shortcut icon" href="<?php echo e($setting->getFavicon()); ?>">
    <link rel="icon" href="<?php echo e($setting->getFavicon()); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/plugins/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo e(url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/dist/css/adminlte.min.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo e(url('')); ?>"><b><?php echo e($setting->website_name); ?> </b>Login</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <?php echo $__env->make('admin.layouts.partials._message', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <form action="" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" required placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" required placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
                <p class="mb-1">
                    <a href="javascrip:;">I forgot my password</a>
                </p>

            </div>
        </div>
    </div>
    <script src="<?php echo e(url('assets/plugins/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/dist/js/adminlte.min.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>