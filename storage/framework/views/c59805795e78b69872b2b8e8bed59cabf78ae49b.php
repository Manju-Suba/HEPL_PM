<?php
$deleteSubTaskPermission = user()->permission('delete_sub_tasks');
?>

<div class="modal-header">
    <h5 class="modal-title" id="modelHeading"><?php echo app('translator')->get('modules.tasks.subTask'); ?> <?php echo app('translator')->get('app.details'); ?></h5>
    <button type="button"  class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
    <div id="leave-detail-section">
        <div class="row">
            <div class="col-sm-12">
                <?php if (isset($component)) { $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8 = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('app.title'),'value' => ucfirst($subTask->title)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('app.startDate'),'value' => ((!is_null($subTask->start_date)) ? $subTask->start_date->format(company()->date_format) : '--'),'html' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('app.dueDate'),'value' => ((!is_null($subTask->due_date)) ? $subTask->due_date->format(company()->date_format) : '--'),'html' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                <?php if($subTask->assigned_to): ?>
                    <div class="col-12 px-0 pb-3 d-block d-lg-flex d-md-flex">
                        <p class="mb-0 text-lightest f-14 w-30 d-inline-block text-capitalize">
                            <?php echo app('translator')->get('modules.tasks.assignTo'); ?></p>
                        <?php if (isset($component)) { $__componentOriginal1c46ebe885e3c4421e9977d656c777b9bed6c39a = $component; } ?>
<?php $component = App\View\Components\Employee::resolve(['user' => $subTask->assignedTo] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                <?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8 = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('app.description'),'value' => $subTask->description != '' ? $subTask->description : '--','html' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                <?php if(count($subTask->files) > 0): ?>
                    <div class="d-flex flex-wrap mt-4">
                        <?php $__currentLoopData = $subTask->files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginalac87ecae6c1a18a2d39c87478d8f3cd5131a5758 = $component; } ?>
<?php $component = App\View\Components\FileCard::resolve(['fileName' => $file->filename,'dateAdded' => $file->created_at->diffForHumans()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('file-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FileCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'subTask'.e($file->id).'']); ?>
                                <?php if($file->icon == 'images'): ?>
                                    <img src="<?php echo e($file->file_url); ?>">
                                <?php else: ?>
                                    <i class="fa <?php echo e($file->icon); ?> text-lightest"></i>
                                <?php endif; ?>

                                 <?php $__env->slot('action', null, []); ?> 
                                    <div class="dropdown ml-auto file-action">
                                        <button
                                            class="btn btn-lg f-14 p-0 text-lightest text-capitalize rounded  dropdown-toggle"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-right border-grey rounded b-shadow-4 p-0"
                                             aria-labelledby="dropdownMenuLink" tabindex="0">
                                            <?php if($file->icon != 'images'): ?>
                                                <a class="cursor-pointer d-block text-dark-grey f-13 pt-3 px-3 "
                                                   target="_blank"
                                                   href="<?php echo e($file->file_url); ?>"><?php echo app('translator')->get('app.view'); ?></a>
                                            <?php endif; ?>

                                            <a class="cursor-pointer d-block text-dark-grey f-13 py-3 px-3 "
                                               href="<?php echo e(route('sub-task-files.download', md5($file->id))); ?>"><?php echo app('translator')->get('app.download'); ?></a>

                                            <?php if($deleteSubTaskPermission == 'all' || ($deleteSubTaskPermission == 'added' && $subTask->added_by == user()->id)): ?>
                                                <a class="cursor-pointer d-block text-dark-grey f-13 pb-3 px-3 delete-sub-task-file"
                                                   data-row-id="<?php echo e($file->id); ?>"
                                                   href="javascript:;"><?php echo app('translator')->get('app.delete'); ?></a>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                 <?php $__env->endSlot(); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalac87ecae6c1a18a2d39c87478d8f3cd5131a5758)): ?>
<?php $component = $__componentOriginalac87ecae6c1a18a2d39c87478d8f3cd5131a5758; ?>
<?php unset($__componentOriginalac87ecae6c1a18a2d39c87478d8f3cd5131a5758); ?>
<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/HEPL_PM/resources/views/tasks/sub_tasks/detail.blade.php ENDPATH**/ ?>