<?php $__env->startComponent('mail::message'); ?>
    <?php echo new \Illuminate\Support\EncodedHtmlString($contact->subject); ?>

    <p>Phone :<?php echo new \Illuminate\Support\EncodedHtmlString($contact->phone); ?></p>
    <p>Email: <?php echo new \Illuminate\Support\EncodedHtmlString($contact->email); ?></p>
    <p><?php echo new \Illuminate\Support\EncodedHtmlString($contact->message); ?></p>
   <?php if(!empty($setting->website_name)): ?>
   <h3>
        <?php echo new \Illuminate\Support\EncodedHtmlString($setting->website_name); ?>

    </h3>
    <a href="<?php echo new \Illuminate\Support\EncodedHtmlString(env('APP_URL')); ?>" target="_blank"><?php echo new \Illuminate\Support\EncodedHtmlString($setting->website_name); ?></a>

   <?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/v2/email/contact.blade.php ENDPATH**/ ?>