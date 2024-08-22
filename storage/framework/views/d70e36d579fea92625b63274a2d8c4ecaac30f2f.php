<?php $__env->startComponent('mail::message'); ?>
# <?php echo app('translator')->get('email.hello'); ?> <?php echo e($name); ?> ,

<?php echo app('translator')->get('email.newTask.subject'); ?>

# <?php echo app('translator')->get('app.task'); ?> <?php echo app('translator')->get('app.details'); ?>

<?php $__env->startComponent('mail::text', ['text' => $content]); ?>

<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::button', ['url' => $url, 'themeColor' => $themeColor]); ?>
<?php echo app('translator')->get('app.view'); ?> <?php echo app('translator')->get('app.task'); ?>
<?php echo $__env->renderComponent(); ?>

<?php echo app('translator')->get('email.regards'); ?>,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/HEPL_PM/resources/views/mail/task/created.blade.php ENDPATH**/ ?>