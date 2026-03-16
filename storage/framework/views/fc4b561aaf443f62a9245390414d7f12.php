<?php $__env->startComponent('mail::message'); ?>
    <p>Please click on the following button in order to verify as subscriber:</p><br><br>
    <p>
        <?php $__env->startComponent('mail::button', ['url' => $subscriber->verification_link]); ?>
            Verify
        <?php echo $__env->renderComponent(); ?>
    </p>
    <p>Or you can copy and paste the link below to your browser.</p>
    <a href="<?php echo new \Illuminate\Support\EncodedHtmlString($subscriber->verification_link); ?>"><?php echo new \Illuminate\Support\EncodedHtmlString($subscriber->verification_link); ?></a>
    <p>If you received this email by mistake, simply delete it. You will not be subscribed if you do not  click the confirmation link above.</p>
   <br><br>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Users\User\Desktop\Folders\projects\vinaid1.4\resources\views/v2/email/subscription.blade.php ENDPATH**/ ?>