<?php
    $managePermission = user()->permission('manage_emergency_contact');
?>

<!-- TAB CONTENT START -->
<div class="tab-pane fade show active mt-5" role="tabpanel" aria-labelledby="nav-email-tab">

    <?php if($managePermission == 'all' || ($employee->id == user()->id)): ?>
        <div class="d-flex justify-content-between action-bar mb-3">
            <?php if (isset($component)) { $__componentOriginal7f662ecf9f97aca611d2405e5e6903e6081fbd17 = $component; } ?>
<?php $component = App\View\Components\Forms\LinkPrimary::resolve(['link' => 'javascript:;','icon' => 'plus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.link-primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\LinkPrimary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 float-left emergency-contacts-btn']); ?>
                <?php echo app('translator')->get('app.create'); ?> <?php echo app('translator')->get('app.new'); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7f662ecf9f97aca611d2405e5e6903e6081fbd17)): ?>
<?php $component = $__componentOriginal7f662ecf9f97aca611d2405e5e6903e6081fbd17; ?>
<?php unset($__componentOriginal7f662ecf9f97aca611d2405e5e6903e6081fbd17); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e = $component; } ?>
<?php $component = App\View\Components\Cards\Data::resolve(['title' => __('modules.emergencyContact.emergencyContact')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <div class="table-responsive">
            <?php if (isset($component)) { $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6 = $component; } ?>
<?php $component = App\View\Components\Table::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Table::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'table-bordered']); ?>
                 <?php $__env->slot('thead', null, []); ?> 
                    <th><?php echo app('translator')->get('app.name'); ?></th>
                    <th><?php echo app('translator')->get('app.email'); ?></th>
                    <th><?php echo app('translator')->get('app.mobile'); ?></th>
                    <th><?php echo app('translator')->get('app.relationship'); ?></th>
                    <th class="text-right"><?php echo app('translator')->get('app.action'); ?></th>
                 <?php $__env->endSlot(); ?>

                <?php $__empty_1 = true; $__currentLoopData = $employee->emergencyContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="tableRow<?php echo e($contact->id); ?>">
                        <td><?php echo e($contact->name); ?></td>
                        <td><?php echo e($contact->email); ?></td>
                        <td><?php echo e($contact->mobile); ?></td>
                        <td><?php echo e($contact->relation); ?></td>
                        <td class="text-right">

                            <div class="task_view">

                                <div class="dropdown">
                                    <a class="task_view_more d-flex align-items-center justify-content-center dropdown-toggle"
                                       type="link"
                                       id="dropdownMenuLink-<?php echo e($count); ?>" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false" data-boundary="viewport">
                                        <i class="icon-options-vertical icons"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right"
                                         aria-labelledby="dropdownMenuLink-<?php echo e($count); ?>" tabindex="0">

                                        <?php if($managePermission == 'all'): ?>
                                            <a href="javascript:;" class="dropdown-item show-contact"
                                               data-contact-id="<?php echo e($contact->id); ?>"><i
                                                    class="fa fa-eye mr-2"></i><?php echo app('translator')->get('app.view'); ?></a>

                                            <a class="dropdown-item edit-contact" href="javascript:;"
                                               data-contact-id="<?php echo e($contact->id); ?>">
                                                <i class="fa fa-edit mr-2"></i>
                                                <?php echo app('translator')->get('app.edit'); ?>
                                            </a>

                                            <a class="dropdown-item delete-table-row" href="javascript:;"
                                               data-row-id="<?php echo e($contact->id); ?>">
                                                <i class="fa fa-trash mr-2"></i>
                                                <?php echo app('translator')->get('app.delete'); ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php if (isset($component)) { $__componentOriginal5ed7b327672191bf848045ea30a08d86da076f8b = $component; } ?>
<?php $component = App\View\Components\Cards\NoRecordFoundList::resolve(['colspan' => '5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.no-record-found-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\NoRecordFoundList::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5ed7b327672191bf848045ea30a08d86da076f8b)): ?>
<?php $component = $__componentOriginal5ed7b327672191bf848045ea30a08d86da076f8b; ?>
<?php unset($__componentOriginal5ed7b327672191bf848045ea30a08d86da076f8b); ?>
<?php endif; ?>
                <?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6)): ?>
<?php $component = $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6; ?>
<?php unset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6); ?>
<?php endif; ?>
        </div>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e)): ?>
<?php $component = $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e; ?>
<?php unset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e); ?>
<?php endif; ?>
</div>
<!-- TAB CONTENT END -->

<script>

    $('body').on('click', '.delete-table-row', function () {
        const id = $(this).data('row-id');
        Swal.fire({
            title: "<?php echo app('translator')->get('messages.sweetAlertTitle'); ?>",
            text: "<?php echo app('translator')->get('messages.recoverRecord'); ?>",
            icon: 'warning',
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: "<?php echo app('translator')->get('messages.confirmDelete'); ?>",
            cancelButtonText: "<?php echo app('translator')->get('app.cancel'); ?>",
            customClass: {
                confirmButton: 'btn btn-primary mr-3',
                cancelButton: 'btn btn-secondary'
            },
            showClass: {
                popup: 'swal2-noanimation',
                backdrop: 'swal2-noanimation'
            },
            buttonsStyling: false
        }).then((result) => {
            if (result.isConfirmed) {
                let url = "<?php echo e(route('emergency-contacts.destroy', ':id')); ?>";
                url = url.replace(':id', id);

                const token = "<?php echo e(csrf_token()); ?>";

                $.easyAjax({
                    type: 'POST',
                    url: url,
                    blockUI: true,
                    data: {
                        '_token': token,
                        '_method': 'DELETE'
                    },
                    success: function (response) {
                        if (response.status == "success") {
                            $('.tableRow' + id).hide();
                        }
                    }
                });
            }
        });
    });

    // Add new emergency contact modal
    $('body').on('click', '.emergency-contacts-btn', function () {
        var url = "<?php echo e(route('emergency-contacts.create')); ?>?user_id=" + "<?php echo e($employee->id); ?>";

        $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        $.ajaxModal(MODAL_LG, url);
    });

    // Edit emergency contact modal
    $('body').on('click', '.edit-contact', function () {
        var id = $(this).data('contact-id');

        var url = "<?php echo e(route('emergency-contacts.edit', ':id')); ?>";
        url = url.replace(':id', id);

        $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        $.ajaxModal(MODAL_LG, url);
    });

    // Show emergency contact modal
    $('body').on('click', '.show-contact', function () {
        const id = $(this).data('contact-id');

        let url = "<?php echo e(route('emergency-contacts.show', ':id')); ?>";
        url = url.replace(':id', id);

        $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        $.ajaxModal(MODAL_LG, url);
    });

    $('.table-responsive').on('show.bs.dropdown', function () {
        $('.table-responsive').css("overflow", "inherit");
    });

    $('.table-responsive').on('hide.bs.dropdown', function () {
        $('.table-responsive').css("overflow", "auto");
    })
</script>
<?php /**PATH /var/www/HEPL_PM/resources/views/employees/ajax/emergency-contacts.blade.php ENDPATH**/ ?>