<?php
$editDesignationPermission = user()->permission('edit_designation');
$deleteDesignationPermission = user()->permission('delete_designation');
?>
<div id="leave-detail-section">
    <div class="row">
        <div class="col-sm-12">
            <div class="card bg-white border-0 b-shadow-4">
                <div class="card-header bg-white  border-bottom-grey text-capitalize justify-content-between p-20">
                    <div class="row">
                        <div class="col-md-10 col-10">
                            <h3 class="heading-h1"><?php echo app('translator')->get('app.menu.designation'); ?> <?php echo app('translator')->get('app.details'); ?></h3>
                        </div>
                        <div class="col-md-2 col-2 text-right">
                            <div class="dropdown">

                                    <button
                                        class="btn btn-lg f-14 px-2 py-1 text-dark-grey text-capitalize rounded  dropdown-toggle"
                                        type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right border-grey rounded b-shadow-4 p-0"
                                        aria-labelledby="dropdownMenuLink" tabindex="0">
                                        <?php if($editDesignationPermission == 'all'): ?>
                                                <a class="dropdown-item openRightModal"
                                                data-redirect-url="<?php echo e(url()->previous()); ?>"
                                                href="<?php echo e(route('designations.edit', $designation->id)); ?>"><?php echo app('translator')->get('app.edit'); ?></a>
                                        <?php endif; ?>
                                        <?php if($deleteDesignationPermission == 'all'): ?>
                                                <a class="dropdown-item delete-designation"><?php echo app('translator')->get('app.delete'); ?></a>
                                        <?php endif; ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php if (isset($component)) { $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8 = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('app.name'),'value' => $designation->name,'html' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <?php if($parent): ?>
                    <?php if (isset($component)) { $__componentOriginal53e40184b23a5cf55bed20787d7874d502fc5bb8 = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('app.menu.parent_id').' '. __('app.name'),'value' => $parent->name,'html' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('body').on('click', '.delete-designation', function() {
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
                var url = "<?php echo e(route('designations.destroy', $designation->id)); ?>";

                var token = "<?php echo e(csrf_token()); ?>";

                $.easyAjax({
                    type: 'POST',
                    url: url,
                    data: {
                        '_token': token,
                        '_method': 'DELETE'
                    },
                    success: function(response) {
                        if (response.status == "success") {
                            window.location.href = response.redirectUrl;
                        }
                    }
                });
            }
        });
    });
</script>
<?php /**PATH /var/www/HEPL_PM/resources/views/designation/ajax/show.blade.php ENDPATH**/ ?>