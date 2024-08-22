<?php
$addDocumentPermission = user()->permission('add_documents');
$viewDocumentPermission = user()->permission('view_documents');
$deleteDocumentPermission = user()->permission('delete_documents');
$editDocumentPermission = user()->permission('edit_documents');
?>

<style>
    .file-action {
        visibility: hidden;
    }

    .file-card:hover .file-action {
        visibility: visible;
    }
</style>

<!-- TAB CONTENT START -->
<div class="col-xl-12 col-lg-12 col-md-12 ntfcn-tab-content-left w-100 p-4">
    <?php if($addDocumentPermission == 'all'): ?>

        <div class="row">
            <div class="col-md-12">
                <a class="f-15 f-w-500" href="javascript:;" id="add-task-file"><i
                        class="icons icon-plus font-weight-bold mr-1"></i><?php echo app('translator')->get('app.add'); ?>
                    <?php echo app('translator')->get('app.file'); ?></a>
            </div>
        </div>
    <?php endif; ?>

    <div class="d-flex flex-wrap mt-3" id="task-file-list">
        <?php
            $totalDocuments = ($user->documents) ? count($user->documents) : 0;
            $permission = 0; // assuming we do have permission for all uploaded files
        ?>
        <?php $__empty_1 = true; $__currentLoopData = $user->documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if($viewDocumentPermission == 'all'
            || ($viewDocumentPermission == 'added' && $file->added_by == user()->id)
            || ($viewDocumentPermission == 'owned' && ($file->user_id == user()->id && $file->added_by != user()->id))
            || ($viewDocumentPermission == 'both' && ($file->added_by == user()->id || $file->user_id == user()->id))): ?>
                <?php if (isset($component)) { $__componentOriginalac87ecae6c1a18a2d39c87478d8f3cd5131a5758 = $component; } ?>
<?php $component = App\View\Components\FileCard::resolve(['fileName' => $file->name,'dateAdded' => $file->created_at->diffForHumans()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('file-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FileCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php if($file->icon == 'images'): ?>
                        <img src="<?php echo e($file->doc_url); ?>">
                    <?php else: ?>
                        <i class="fa <?php echo e($file->icon); ?> text-lightest"></i>
                    <?php endif; ?>
                     <?php $__env->slot('action', null, []); ?> 
                        <div class="dropdown ml-auto file-action">
                            <button
                                class="btn btn-lg f-14 p-0 text-lightest text-capitalize rounded  dropdown-toggle"
                                type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-h"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right border-grey rounded b-shadow-4 p-0"
                                aria-labelledby="dropdownMenuLink" tabindex="0">
                                <?php if($viewDocumentPermission == 'all'
                                || ($viewDocumentPermission == 'added' && $file->added_by == user()->id)
                                || ($viewDocumentPermission == 'owned' && ($file->user_id == user()->id && $file->added_by != user()->id))
                                || ($viewDocumentPermission == 'both' && ($file->added_by == user()->id || $file->user_id == user()->id))): ?>

                                    <a class="cursor-pointer d-block text-dark-grey f-13 pt-3 px-3 "
                                        target="_blank" href="<?php echo e($file->doc_url); ?>"><?php echo app('translator')->get('app.view'); ?></a>

                                    <a class="cursor-pointer d-block text-dark-grey f-13 py-3 px-3 "
                                        href="<?php echo e(route('employee-docs.download', md5($file->id))); ?>"><?php echo app('translator')->get('app.download'); ?></a>
                                <?php endif; ?>

                                <?php if($editDocumentPermission == 'all'
                                || ($editDocumentPermission == 'added' && $file->added_by == user()->id)
                                || ($editDocumentPermission == 'owned' && ($file->user_id == user()->id && $file->added_by != user()->id))
                                || ($editDocumentPermission == 'both' && ($file->added_by == user()->id || $file->user_id == user()->id))): ?>
                                    <a class="cursor-pointer d-block text-dark-grey pb-3 f-13 px-3 edit-file"
                                        href="javascript:;" data-file-id="<?php echo e($file->id); ?>"><?php echo app('translator')->get('app.edit'); ?></a>
                                <?php endif; ?>

                                <?php if($deleteDocumentPermission == 'all'
                                || ($deleteDocumentPermission == 'added' && $file->added_by == user()->id)
                                || ($deleteDocumentPermission == 'owned' && ($file->user_id == user()->id && $file->added_by != user()->id))
                                || ($deleteDocumentPermission == 'both' && ($file->added_by == user()->id || $file->user_id == user()->id))): ?>
                                    <a class="cursor-pointer d-block text-dark-grey f-13 pb-3 px-3 delete-file"
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
            <?php else: ?>
                <?php
                    $permission++;
                ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="align-items-center d-flex flex-column text-lightest p-20 w-100">
                <i class="fa fa-file f-21 w-100"></i>

                <div class="f-15 mt-4">
                    - <?php echo app('translator')->get('messages.noFileUploaded'); ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(isset($user->clientDocuments) && $totalDocuments > 0 && $totalDocuments == $permission): ?>
            <div class="align-items-center d-flex flex-column text-lightest p-20 w-100">
                <i class="fa fa-file-excel f-21 w-100"></i>

                <div class="f-15 mt-4">
                    - <?php echo app('translator')->get('messages.noFileUploaded'); ?> -
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
    $('#add-task-file').click(function() {
        var url = "<?php echo e(route('employee-docs.create')); ?>";

        $(MODAL_DEFAULT + ' ' + MODAL_HEADING).html('...');
        $.ajaxModal(MODAL_DEFAULT, url);
    });

    $('body').on('click', '.edit-file', function() {
        var fileId = $(this).data('file-id');
        var url = "<?php echo e(route('employee-docs.edit', ':id')); ?>";
        url = url.replace(':id', fileId);

        $(MODAL_DEFAULT + ' ' + MODAL_HEADING).html('...');
        $.ajaxModal(MODAL_DEFAULT, url);
    });

    $('#cancel-doc').click(function() {
        $('#save-document-data-form').addClass('d-none');
        $('#add-task-file').closest('.row').removeClass('d-none');
    });

    $('body').on('click', '.delete-file', function() {
        var id = $(this).data('row-id');
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
                var url = "<?php echo e(route('employee-docs.destroy', ':id')); ?>";
                url = url.replace(':id', id);

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
                            $('#task-file-list').html(response.view);
                        }
                    }
                });
            }
        });
    });
</script>
<!-- TAB CONTENT END -->
<?php /**PATH /var/www/HEPL_PM/resources/views/profile-settings/ajax/employee/index.blade.php ENDPATH**/ ?>