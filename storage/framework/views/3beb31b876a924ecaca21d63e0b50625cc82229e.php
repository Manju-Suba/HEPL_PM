<div class="taskEmployeeImg rounded-circle mr-1">
    <a href="<?php echo e(route('employees.show', $user->id)); ?>">
        <img data-toggle="tooltip" data-original-title="<?php echo e(mb_ucwords($user->name)); ?>"
            src="<?php echo e($user->image_url); ?>">
    </a>
</div>
<?php /**PATH /var/www/HEPL_PM/resources/views/components/employee-image.blade.php ENDPATH**/ ?>