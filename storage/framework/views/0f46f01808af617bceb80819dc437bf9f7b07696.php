

<?php $__env->startPush('styles'); ?>
    <style>
        .role-permission-select .btn {
            border: none;
            width: auto;
        }

    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <!-- SETTINGS START -->
    <div class="w-100 d-flex ">

        <?php if (isset($component)) { $__componentOriginalf9dcf9e0132687b6b5d826e52f2f3d6c594b585b = $component; } ?>
<?php $component = App\View\Components\SettingSidebar::resolve(['activeMenu' => $activeSettingMenu] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('setting-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SettingSidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf9dcf9e0132687b6b5d826e52f2f3d6c594b585b)): ?>
<?php $component = $__componentOriginalf9dcf9e0132687b6b5d826e52f2f3d6c594b585b; ?>
<?php unset($__componentOriginalf9dcf9e0132687b6b5d826e52f2f3d6c594b585b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalb44089abe45f2c89173e85ef93b9bf2aa54af94e = $component; } ?>
<?php $component = App\View\Components\SettingCard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('setting-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SettingCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('buttons', null, []); ?> 
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <?php if (isset($component)) { $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480 = $component; } ?>
<?php $component = App\View\Components\Forms\ButtonPrimary::resolve(['icon' => 'users-cog'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonPrimary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'add-role','class' => 'mb-2']); ?>
                            <?php echo app('translator')->get('modules.roles.addRole'); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480)): ?>
<?php $component = $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480; ?>
<?php unset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480); ?>
<?php endif; ?>
                    </div>
                </div>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('header', null, []); ?> 
                <div class="s-b-n-header" id="tabs">
                    <h2 class="mb-0 p-20 f-21 font-weight-normal text-capitalize border-bottom-grey">
                        <?php echo app('translator')->get($pageTitle); ?></h2>
                </div>
             <?php $__env->endSlot(); ?>

            <div class="col-lg-12 col-md-12 ntfcn-tab-content-left w-100">
                <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="d-flex justify-content-between border rounded my-3 px-4 py-2 align-items-center">
                        <div>
                            <div class="heading-h4"><?php echo e(mb_ucwords($role->display_name)); ?></div>
                            <div class="simple-text text-lightest mt-1"><?php echo e($role->users_count); ?> <?php echo app('translator')->get('app.member'); ?>
                            </div>
                        </div>
                        <div>
                            <?php if (isset($component)) { $__componentOriginal145d6f964f40dbb2191316e2895f0c633dbd4d26 = $component; } ?>
<?php $component = App\View\Components\Forms\ButtonSecondary::resolve(['icon' => 'key'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonSecondary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'view-permission','data-role-id' => ''.e($role->id).'']); ?>
                                <?php echo app('translator')->get('modules.permission.permissions'); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal145d6f964f40dbb2191316e2895f0c633dbd4d26)): ?>
<?php $component = $__componentOriginal145d6f964f40dbb2191316e2895f0c633dbd4d26; ?>
<?php unset($__componentOriginal145d6f964f40dbb2191316e2895f0c633dbd4d26); ?>
<?php endif; ?>
                        </div>
                    </div>
                    <div class="table-sm-responsive role-permissions" id="role-permission-<?php echo e($role->id); ?>"></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </div>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb44089abe45f2c89173e85ef93b9bf2aa54af94e)): ?>
<?php $component = $__componentOriginalb44089abe45f2c89173e85ef93b9bf2aa54af94e; ?>
<?php unset($__componentOriginalb44089abe45f2c89173e85ef93b9bf2aa54af94e); ?>
<?php endif; ?>

    </div>
    <!-- SETTINGS END -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $('body').on('click', '.view-permission', function() {
            var roleId = $(this).data('role-id');
            var url = "<?php echo e(route('role-permissions.permissions')); ?>";

            $.easyAjax({
                url: url,
                blockUI: true,
                container: '.settings-box',
                type: "POST",
                data: {
                    'roleId': roleId,
                    '_token': '<?php echo e(csrf_token()); ?>'
                },
                success: function(response) {
                    if (response.status == 'success') {

                        if ($('#role-permission-' + roleId).html() != '') {
                            $('.role-permissions').html('');                            
                        } else {
                            $('.role-permissions').html('');                            
                            $('#role-permission-' + roleId).html(response.html);
                        }
                    }
                }
            });
        });

        $('body').on('click', '.reset-permission', function() {
            var roleId = $(this).data('role-id');
            Swal.fire({
                title: "<?php echo app('translator')->get('messages.sweetAlertTitle'); ?>",
                text: "<?php echo app('translator')->get('messages.confirmResetPermission'); ?>",
                icon: 'warning',
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: "<?php echo app('translator')->get('app.yes'); ?>",
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

                    var url = "<?php echo e(route('role-permissions.reset_permissions')); ?>";

                    $.easyAjax({
                        url: url,
                        blockUI: true,
                        container: '.settings-box',
                        type: "POST",
                        data: {
                            'roleId': roleId,
                            '_token': '<?php echo e(csrf_token()); ?>'
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                window.location.reload();
                            }
                        }
                    });
                }
            });
        });

        $('body').on('change', '.role-permission-select', function() {
            var permissionId = $(this).data('permission-id');
            var roleId = $(this).data('role-id');
            var permissionType = $(this).val();
            var url = "<?php echo e(route('role-permissions.store')); ?>";

            $.easyAjax({
                url: url,
                blockUI: true,
                container: '.main-container',
                type: "POST",
                data: {
                    'roleId': roleId,
                    'permissionId': permissionId,
                    'permissionType': permissionType,
                    '_token': '<?php echo e(csrf_token()); ?>'
                }
            });
        });

        $('body').on('click', '.show-custom-permission', function() {
            var moduleRow = $(this).closest('tr');
            var moduleId = $(this).data('module-id');
            var roleId = $(this).data('role-id');
            var url = "<?php echo e(route('role-permissions.custom_permissions')); ?>";
            var showCustomPermissionButton = $(this);

            $.easyAjax({
                url: url,
                blockUI: true,
                container: '#role-permission-' + roleId,
                type: "POST",
                data: {
                    'roleId': roleId,
                    'moduleId': moduleId,
                    '_token': '<?php echo e(csrf_token()); ?>'
                },
                success: function(response) {
                    if (response.status == 'success') {
                        if ($('#role-permission-' + roleId).find(
                                'table.permisison-table tbody #module-custom-permission-' + moduleId)
                            .length > 0) {
                            $('#role-permission-' + roleId).find(
                                'table.permisison-table tbody #module-custom-permission-' + moduleId
                            ).remove();
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


        $('body').on('click', '#add-role', function() {
            var url = "<?php echo e(route('role-permissions.create')); ?>";
            $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
            $.ajaxModal(MODAL_LG, url);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/HEPL_PM/resources/views/role-permissions/index.blade.php ENDPATH**/ ?>