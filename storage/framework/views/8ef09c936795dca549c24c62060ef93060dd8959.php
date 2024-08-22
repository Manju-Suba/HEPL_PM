<?php $__empty_1 = true; $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-sm-12 mb-3 timelog-user-<?php echo e($item->id); ?>">
        <div class="card ticket-message rounded border">
            <div class="">
                <div class="card-body border-0 ">
                    <div class="row">
                        <div class="col-md-4">
                            <?php if (isset($component)) { $__componentOriginal1c46ebe885e3c4421e9977d656c777b9bed6c39a = $component; } ?>
<?php $component = App\View\Components\Employee::resolve(['user' => $item] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('employee'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Employee::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c46ebe885e3c4421e9977d656c777b9bed6c39a)): ?>
<?php $component = $__componentOriginal1c46ebe885e3c4421e9977d656c777b9bed6c39a; ?>
<?php unset($__componentOriginal1c46ebe885e3c4421e9977d656c777b9bed6c39a); ?>
<?php endif; ?>
                        </div>
                        <div class="col-md-4 text-center align-self-center border-left">

                            <span class="f-w-500">
                                <?php echo e(intdiv(($item->total_minutes - $item->total_break_minutes), 60)); ?>

                            </span> <span class="f-12 text-dark-grey ml-1"> <?php echo app('translator')->get('modules.projects.hoursLogged'); ?></span>
                        </div>

                        <div class="col-md-3 text-center align-self-center border-left">

                            <span class="f-w-500">
                                <?php echo e(currency_format($item->earnings)); ?>

                            </span> <span class="f-12 text-dark-grey ml-1"> <?php echo app('translator')->get('app.earnings'); ?></span>
                        </div>

                        <div class="col-md-1 text-center align-self-center border-left">
                            <button class="btn btn-outline show-user-timelogs text-primary" data-user-id="<?php echo e($item->id); ?>"><i
                                    class="fa fa-plus"></i></button>

                            <button class="btn btn-outline hide-user-timelogs d-none" data-user-id="<?php echo e($item->id); ?>"><i
                                    class="fa fa-minus"></i></button>
                        </div>

                    </div>

                </div>

            </div>
        </div><!-- card end -->
    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="col-md-12">
        <?php if (isset($component)) { $__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33 = $component; } ?>
<?php $component = App\View\Components\Cards\NoRecord::resolve(['icon' => 'user','message' => __('messages.noRecordFound')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.no-record'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\NoRecord::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33)): ?>
<?php $component = $__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33; ?>
<?php unset($__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33); ?>
<?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/HEPL_PM/resources/views/timelogs/ajax/member-list.blade.php ENDPATH**/ ?>