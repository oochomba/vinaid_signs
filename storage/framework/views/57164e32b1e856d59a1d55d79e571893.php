<?php $__env->startSection('styles'); ?>
    <style type="text/css">
        .contact-form-3 .form-group {
            margin-bottom: 30px;
        }

        .breadcrumbs nav ol {
            justify-content: left;
        }

        .contact-list li {
            list-style-type: none;
            color: rgb(19 20 20 / 80%);
            margin-bottom: 5px;
            border-radius: 8px;
            padding-bottom: 10px;
        }

        .contact-list li i {
            color: var(--bs-primary);
            font-size: 22px;
            vertical-align: middle;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('')); ?>">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <?php echo $__env->make($version.'_facts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="container-fluid">
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-6 mb-2 mb-lg-0" style="padding-right:2%">
                    <h2 class="title mb-1">Contact Information</h2>
                    <p class="mb-3">
                        Welecome to <strong><?php echo e(config('siteconfig.sitename')); ?></strong> where creativit meats reality.
                        We value your feedback. Incase of any quaries feel free to contact our customer care
                        through:
                    </p>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="contact-info">
                                <h3>Our Contacts</h3>
                                <ul class="contact-list">
                                    <li>
                                        <i class="fa fa-map-marker"></i>&nbsp;
                                        <span class="">
                                        <?php echo e(config('siteconfig.contacts.location.name')); ?>


                                        </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>&nbsp;
                                        <a href="tel:#"><?php echo e(config('siteconfig.contacts.phone')); ?></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>&nbsp;
                                        <a class=""
                                            href="mailto:<?php echo e(config('siteconfig.contacts.email')); ?>"><?php echo e(config('siteconfig.contacts.email')); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="contact-info">
                                <h3>Working Hours</h3>

                                <ul class="contact-list">
                                    <li>
                                        <i class="icon-clock-o"></i>
                                        <span class="text-dark">Monday-Saturday</span> <br>8.00am - 8.00pm EAT
                                    </li>
                                    <li>
                                        <i class="icon-calendar"></i>
                                        <span class="text-dark">Sunday</span> <br>8.00am - 5.00pm EAT
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="title mb-1">Got Any Questions?</h2>
                    <p class="mb-2">Use the form below to get in touch with the sales team</p>



                    <div class="contact-form-box contact-form contact-form-3">


                        <form action="" method="POST" class="contact-form mb-3">
                            <div class="row">
                                <?php echo e(csrf_field()); ?>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cname" class="sr-only">Name</label>
                                        <input type="text" name="name"
                                            class="form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                            id="cname" placeholder="Name *" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cemail" class="sr-only">Email</label>
                                        <input type="email" name="email"
                                            class="form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                            id="cemail" placeholder="Email *" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cphone" class="sr-only">Phone</label>
                                        <input type="tel" name="phone"
                                            class="form-control <?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>"
                                            id="cphone" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="csubject" class="sr-only">Subject</label>
                                        <input type="text" name="subject"
                                            class="form-control <?php echo e($errors->has('subject') ? ' is-invalid' : ''); ?>"
                                            id="csubject" placeholder="Subject" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cmessage" class="sr-only">Message</label>
                                <textarea name="message" class="form-control <?php echo e($errors->has('message') ? ' is-invalid' : ''); ?>" cols="30"
                                    rows="4" id="cmessage" placeholder="Message *" required></textarea>
                            </div>
                            <button type="submit" class="default-theme-btn-two" data-text="Send Message">Send
                                Message<span></span></button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($version.'layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/v1/contact.blade.php ENDPATH**/ ?>