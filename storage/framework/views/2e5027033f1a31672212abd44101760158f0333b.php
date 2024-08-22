<!-- PAGE TITLE START -->
<div <?php echo e($attributes->merge(['class' => 'page-title'])); ?>>
    <div class="page-heading">
        <h2 class="mb-0 pr-3 text-dark f-18 font-weight-bold"><?php echo e($pageTitle); ?>


            <span class="text-lightest f-12 f-w-500 ml-2">
                <a href="<?php echo e(route('dashboard')); ?>" class="text-lightest"><?php echo app('translator')->get('app.menu.home'); ?></a> &bull;
                <?php
                    $link = '';
                     $link = 'https://hepl_pm.cavinkare.in/index.php';
                ?>

                <?php for($i = 1; $i <= count(Request::segments()); $i++): ?>
                    <?php if(($i < count(Request::segments())) && ($i> 0)): ?>
                        <?php $link .= '/' . Request::segment($i); ?>

                        <?php if(Request::segment($i) != 'account'): ?>
                            <a href="<?= str_contains(url()->current(),'public')?$link:$link ?>" class="text-lightest"><?php echo e(mb_ucwords(str_replace('-', ' ', Request::segment($i)))); ?></a> &bull;


                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo e($pageTitle); ?>

                    <?php endif; ?>
                <?php endfor; ?>
        </span>
        </h2>
    </div>
</div>
<!-- PAGE TITLE END -->
<?php /**PATH /var/www/HEPL_PM/resources/views/components/app-title.blade.php ENDPATH**/ ?>