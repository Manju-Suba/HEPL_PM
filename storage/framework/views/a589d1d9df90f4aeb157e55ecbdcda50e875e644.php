<?php if (isset($component)) { $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6 = $component; } ?>
<?php $component = App\View\Components\Table::resolve(['headType' => 'thead-light'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Table::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'table-bordered mt-3 permisison-table table-hover']); ?>
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
                    $allowedPermissions = json_decode($permission->allowed_permissions);
                    $permissionType = $role->permissionType($permission->id);
                ?>
                <td>
                    <select class="select-picker role-permission-select border-0"
                            data-permission-id="<?php echo e($permission->id); ?>" data-role-id="<?php echo e($role->id); ?>">
                        <?php if(!is_null($allowedPermissions)): ?>
                            <?php $__currentLoopData = $allowedPermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if($permissionType == $item): ?> selected <?php endif; ?>
                                <?php if(!$permissionType && $item == 5): ?> selected <?php endif; ?> value="<?php echo e($item); ?>">
                                    <?php echo app('translator')->get('app.'.$key); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <?php if(count($moduleData->permissions) < 4): ?>
                <?php for($i = 1; $i <= 4 - count($moduleData->permissions); $i++): ?>
                    <td>--</td>
                <?php endfor; ?>
            <?php endif; ?>

            <td class="text-center bg-light border-left">
                <?php if($moduleData->custom_permissions_count > 0): ?>
                    <div class="p-2">
                        <a href="javascript:;" data-module-id="<?php echo e($moduleData->id); ?>"
                           data-role-id="<?php echo e($role->id); ?>"
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
<?php /**PATH /var/www/HEPL_PM/resources/views/role-permissions/ajax/permissions.blade.php ENDPATH**/ ?>