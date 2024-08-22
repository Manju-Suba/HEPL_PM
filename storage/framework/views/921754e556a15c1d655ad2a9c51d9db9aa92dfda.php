<div id="task-detail-section">
    <div class="row">
        <div class="col-sm-12 col-lg-7">
            <div class="card bg-white border-0 b-shadow-4">
                <div class="card-header bg-white  border-bottom-grey text-capitalize justify-content-between p-20">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-10">
                            <h3 class="heading-h1 mb-3"><?php echo app('translator')->get('app.timeLog'); ?> <?php echo app('translator')->get('app.details'); ?></h3>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 text-right">
                            <?php if(
                                $editTimelogPermission == 'all'
                                || ($editTimelogPermission == 'added' && $timeLog->added_by == user()->id)
                                || ($editTimelogPermission == 'owned'
                                    && (($timeLog->project && $timeLog->project->client_id == user()->id) || $timeLog->user_id == user()->id)
                                    )
                                || ($editTimelogPermission == 'both' && (($timeLog->project && $timeLog->project->client_id == user()->id) || $timeLog->user_id == user()->id || $timeLog->added_by == user()->id))
                            ): ?>
                                <div class="dropdown">
                                    <button
                                        class="btn btn-lg f-14 px-2 py-1 text-dark-grey text-capitalize rounded  dropdown-toggle"
                                        type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right border-grey rounded b-shadow-4 p-0"
                                        aria-labelledby="dropdownMenuLink" tabindex="0">
                                        <?php if(!is_null($timeLog->end_time)): ?>
                                            <a class="dropdown-item openRightModal"
                                                href="<?php echo e(route('timelogs.edit', $timeLog->id)); ?>"><?php echo app('translator')->get('app.edit'); ?></a>
                                        <?php else: ?>
                                            <a class="dropdown-item stop-timer"
                                                data-time-id="<?php echo e($timeLog->id); ?>"
                                                href="javascript:;"><?php echo app('translator')->get('app.stop'); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php if (isset($component)) { $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8 = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('modules.timeLogs.startTime'),'value' => $timeLog->start_time->timezone(company()->timezone)->format(company()->date_format . ' ' . company()->time_format)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\DataRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8)): ?>
<?php $component = $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8; ?>
<?php unset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8); ?>
<?php endif; ?>

                    <?php if(!is_null($timeLog->end_time)): ?>
                        <?php if (isset($component)) { $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8 = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('modules.timeLogs.endTime'),'value' => $timeLog->end_time->timezone(company()->timezone)->format(company()->date_format . ' ' . company()->time_format)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\DataRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8)): ?>
<?php $component = $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8; ?>
<?php unset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8 = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('modules.timeLogs.totalHours'),'value' => $timeLog->hours] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\DataRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8)): ?>
<?php $component = $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8; ?>
<?php unset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8); ?>
<?php endif; ?>
                    <?php elseif(!is_null($timeLog->activeBreak)): ?>
                        <div class="col-12 px-0 pb-3 d-flex">
                            <p class="mb-0 text-lightest f-14 w-30 d-inline-block text-capitalize">
                                <?php echo app('translator')->get('modules.timeLogs.endTime'); ?></p>
                            <p class="mb-0 text-dark-grey f-14">
                                <span class="badge badge-secondary"><?php echo app('translator')->get('modules.timeLogs.paused'); ?></span>
                            </p>
                        </div>
                    <?php else: ?>
                        <div class="col-12 px-0 pb-3 d-flex">
                            <p class="mb-0 text-lightest f-14 w-30 d-inline-block text-capitalize">
                                <?php echo app('translator')->get('modules.timeLogs.endTime'); ?></p>
                            <p class="mb-0 text-dark-grey f-14">
                                <span class="badge badge-primary"><?php echo app('translator')->get('app.active'); ?></span>
                            </p>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8 = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('app.earnings'),'value' => currency_format($timeLog->earnings)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\DataRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8)): ?>
<?php $component = $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8; ?>
<?php unset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8 = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('modules.timeLogs.memo'),'value' => $timeLog->memo] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\DataRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8)): ?>
<?php $component = $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8; ?>
<?php unset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8 = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('app.project'),'value' => $timeLog->project->project_name ?? '--'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\DataRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8)): ?>
<?php $component = $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8; ?>
<?php unset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8 = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('app.task'),'value' => $timeLog->task->heading ?? '--'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\DataRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8)): ?>
<?php $component = $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8; ?>
<?php unset($__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8); ?>
<?php endif; ?>


                    <div class="col-12 px-0 pb-3 d-flex">
                        <p class="mb-0 text-lightest f-14 w-30 d-inline-block text-capitalize">
                            <?php echo app('translator')->get('app.employee'); ?></p>
                        <p class="mb-0 text-dark-grey f-14">
                            <?php if (isset($component)) { $__componentOriginal1c46ebe885e3c4421e9977d656c777b9bed6c39a = $component; } ?>
<?php $component = App\View\Components\Employee::resolve(['user' => $timeLog->user] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        </p>
                    </div>
                    <?php if (isset($component)) { $__componentOriginal3c960abe02ba5e6e89cacf00e5c55b3f476974bf = $component; } ?>
<?php $component = App\View\Components\Forms\CustomFieldShow::resolve(['fields' => $fields,'model' => $timeLog] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.custom-field-show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\CustomFieldShow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c960abe02ba5e6e89cacf00e5c55b3f476974bf)): ?>
<?php $component = $__componentOriginal3c960abe02ba5e6e89cacf00e5c55b3f476974bf; ?>
<?php unset($__componentOriginal3c960abe02ba5e6e89cacf00e5c55b3f476974bf); ?>
<?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-5">
            <div class="card bg-white border-0 b-shadow-4">
                <div class="card-header bg-white  border-bottom-grey text-capitalize justify-content-between p-20">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="heading-h1 mb-3"><?php echo app('translator')->get('modules.tasks.history'); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center f-12 text-dark-grey">
                            <span><i class="fa fa-clock"></i> <?php echo app('translator')->get('modules.timeLogs.startTime'); ?></span>
                            <?php echo e($timeLog->start_time->timezone(company()->timezone)->format(company()->date_format .' '.company()->time_format)); ?>

                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center f-12 text-dark-grey">
                            <span><i class="fa fa-briefcase"></i> <?php echo app('translator')->get('app.task'); ?></span>
                            <?php echo e($timeLog->task->heading); ?>

                        </li>
                        <?php $__currentLoopData = $timeLog->breaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center f-12 text-dark-grey">
                                <?php if(!is_null($item->end_time)): ?>
                                    <?php
                                        $endTime = $item->end_time;
                                        $totalHours = $endTime->diff($item->start_time)->format('%d') * 24 + $endTime->diff($item->start_time)->format('%H');
                                        $totalMinutes = $totalHours * 60 + $endTime->diff($item->start_time)->format('%i');

                                        $timeLogHours = intdiv($totalMinutes, 60) . ' ' . __('app.hrs') . ' ';

                                        if ($totalMinutes % 60 > 0) {
                                            $timeLogHours .= $totalMinutes % 60 . ' ' . __('app.mins');
                                        }
                                    ?>
                                    <span><i class="fa fa-mug-hot"></i> <?php echo app('translator')->get('modules.timeLogs.break'); ?> (<?php echo e($timeLogHours); ?>)</span>
                                    <span>
                                        <?php echo e($item->start_time->timezone(company()->timezone)->format(company()->time_format) . ' - ' . $item->end_time->timezone(company()->timezone)->format(company()->time_format)); ?>


                                        <?php if(
                                            $editTimelogPermission == 'all'
                                            || ($editTimelogPermission == 'added' && $timeLog->added_by == user()->id)
                                            || ($editTimelogPermission == 'owned'
                                                && (($timeLog->project && $timeLog->project->client_id == user()->id) || $timeLog->user_id == user()->id)
                                                )
                                            || ($editTimelogPermission == 'both' && (($timeLog->project && $timeLog->project->client_id == user()->id) || $timeLog->user_id == user()->id || $timeLog->added_by == user()->id))
                                        ): ?>
                                            <a href="javascript:;" data-break-id="<?php echo e($item->id); ?>" class="text-lightest ml-1 edit-time-break"><i class="fa fa-edit"></i></a>
                                        <?php endif; ?>
                                    </span>
                                <?php else: ?>
                                    <span><i class="fa fa-mug-hot"></i> <?php echo app('translator')->get('modules.timeLogs.break'); ?></span>
                                    <?php echo e($item->start_time->timezone(company()->timezone)->format(company()->time_format)); ?>

                                <?php endif; ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if(!is_null($timeLog->end_time)): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center f-12 text-dark-grey">
                                <span><i class="fa fa-clock"></i> <?php echo app('translator')->get('modules.timeLogs.endTime'); ?></span>
                                <?php echo e($timeLog->end_time->timezone(company()->timezone)->format(company()->date_format . ' ' . company()->time_format)); ?>

                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('body').on('click', '.stop-timer', function() {
        var id = $(this).data('time-id');
        var url = "<?php echo e(route('timelogs.stop_timer', ':id')); ?>";
        url = url.replace(':id', id);
        var token = '<?php echo e(csrf_token()); ?>';
        $.easyAjax({
            url: url,
            type: "POST",
            data: {
                timeId: id,
                _token: token
            },
            success: function(data) {
                window.location.reload();
            }
        })

    });

    $('body').on('click', '.edit-time-break', function() {
        var breakId = $(this).data('break-id');
        var url = "<?php echo e(route('timelog-break.edit', ':id')); ?>";
        url = url.replace(':id', breakId);
        $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        $.ajaxModal(MODAL_LG, url);
    });

</script>
<?php /**PATH /var/www/HEPL_PM/resources/views/timelogs/ajax/show.blade.php ENDPATH**/ ?>