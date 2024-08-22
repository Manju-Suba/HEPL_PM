<style>
    .role-permission-select .btn {
        border: none;
        width: auto;
    }

    .permisison-table .thead-light {
        top: 107px;
    }

</style>

<?php if($employee->customised_permissions): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'warning','class' => 'mt-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'warning','class' => 'mt-4']); ?>
        <div class="d-flex justify-content-between">
            <div class="pt-2">
                <i class="fa fa-exclamation-triangle"></i> <?php echo app('translator')->get('messages.customPermissionError'); ?>
            </div>
            <?php if (isset($component)) { $__componentOriginal145d6f964f40dbb2191316e2895f0c633dbd4d26 = $component; } ?>
<?php $component = App\View\Components\Forms\ButtonSecondary::resolve(['icon' => 'sync'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonSecondary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'reset-user-permissions']); ?><?php echo app('translator')->get('app.reset'); ?> <?php echo app('translator')->get('modules.permission.permissions'); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal145d6f964f40dbb2191316e2895f0c633dbd4d26)): ?>
<?php $component = $__componentOriginal145d6f964f40dbb2191316e2895f0c633dbd4d26; ?>
<?php unset($__componentOriginal145d6f964f40dbb2191316e2895f0c633dbd4d26); ?>
<?php endif; ?>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php endif; ?>

<?php if($employee->hasRole('admin')): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'danger','class' => 'mt-5','icon' => 'exclamation-triangle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'danger','class' => 'mt-5','icon' => 'exclamation-triangle']); ?>
        <?php echo app('translator')->get('messages.adminPermissionError'); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php else: ?>

    <?php if (isset($component)) { $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6 = $component; } ?>
<?php $component = App\View\Components\Table::resolve(['headType' => 'thead-light'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Table::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'table-bordered table-hover mt-4 permisison-table bg-white rounded']); ?>
         <?php $__env->slot('thead', null, []); ?> 
            <th width="20%">
                <?php echo app('translator')->get('app.module'); ?>
            </th>
            <th width="16%"><?php echo app('translator')->get('app.add'); ?></th>
            <th width="16%"><?php echo app('translator')->get('app.view'); ?></th>
            <th width="16%"><?php echo app('translator')->get('app.update'); ?></th>
            <th width="16%"><?php echo app('translator')->get('app.delete'); ?></th>
            <th width="16%"></th>
         <?php $__env->endSlot(); ?>
        <?php $__currentLoopData = $modulesData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $moduleData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo app('translator')->get('modules.module.'.$moduleData->module_name); ?>
                </td>
                <?php $__currentLoopData = $moduleData->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $permissionType = $employee->permissionTypeId($permission->name);
                        $allowedPermissions = json_decode($permission->allowed_permissions);
                    ?>
                    <td>
                        <select class="role-permission-select border-0" data-permission-id="<?php echo e($permission->id); ?>">
                            <?php if(!is_null($allowedPermissions)): ?>
                                <?php $__currentLoopData = $allowedPermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($permissionType == $key): ?> selected <?php endif; ?>
                                    <?php if(!$permissionType && $item == 5): ?> selected <?php endif; ?> value="<?php echo e($item); ?>">
                                    <?php echo app('translator')->get('app.'.$key); ?></option>                            
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                            
                            <?php endif; ?>
                        </select>
                    </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <?php if(count($moduleData->permissions) < 4): ?>
                    <?php for($i = 1; $i <= 4 - count($moduleData->permissions); $i++): ?> <td>--</td> <?php endfor; ?>
                <?php endif; ?>

                <td class="text-center bg-light border-left">
                    <?php if($moduleData->custom_permissions_count > 0): ?>
                        <div class="p-2">
                            <a href="javascript:;" data-module-id="<?php echo e($moduleData->id); ?>"
                                class="text-dark-grey show-custom-permission dropdown-toggle">
                                <?php echo app('translator')->get('app.more'); ?> <i class="fa fa-chevron-down"></i>
                            </a>
                        </div>
                    <?php endif; ?>
                </td>


            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6)): ?>
<?php $component = $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6; ?>
<?php unset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6); ?>
<?php endif; ?>

    <script>
        $('body').on('click', '.show-custom-permission', function() {
            var moduleRow = $(this).closest('tr');
            var moduleId = $(this).data('module-id');
            var url = "<?php echo e(route('user-permissions.custom_permissions', $employee->id)); ?>";
            var showCustomPermissionButton = $(this);

            $.easyAjax({
                url: url,
                blockUI: true,
                container: '.main-container',
                type: "POST",
                data: {
                    'moduleId': moduleId,
                    '_token': '<?php echo e(csrf_token()); ?>'
                },
                success: function(response) {
                    if (response.status == 'success') {
                        if ($('table.permisison-table tbody #module-custom-permission-' + moduleId)
                            .length > 0) {
                            $('table.permisison-table tbody #module-custom-permission-' + moduleId)
                                .remove();
                        } else {
                            moduleRow.after(response.html);
                        }
                        showCustomPermissionButton
                            .find(".svg-inline--fa")
                            .toggleClass("fa-chevron-down fa-chevron-up");
                    }
                }
            });
        });

        $('body').on('change', '.role-permission-select', function() {
            var permissionId = $(this).data('permission-id');
            var permissionType = $(this).val();
            var url = "<?php echo e(route('user-permissions.update', $employee->id)); ?>";

            $.easyAjax({
                url: url,
                blockUI: true,
                container: '.main-container',
                type: "POST",
                data: {
                    '_method': 'PUT',
                    'permissionId': permissionId,
                    'permissionType': permissionType,
                    'permissionCustomised': 1,
                    '_token': '<?php echo e(csrf_token()); ?>'
                }
            });
        });

        $('body').on('click', '#reset-user-permissions', function() {
            var url = "<?php echo e(route('user-permissions.reset_permissions', $employee->id)); ?>";

            $.easyAjax({
                url: url,
                blockUI: true,
                container: '.main-container',
                type: "POST",
                data: {
                    '_token': '<?php echo e(csrf_token()); ?>'
                },
                success: function(response) {
                    if (response.status == 'success') {
                        window.location.reload();                        
                    }
                }
            });
        });

    </script>
<?php endif; ?>
<?php /**PATH /var/www/HEPL_PM/resources/views/employees/ajax/permissions.blade.php ENDPATH**/ ?>