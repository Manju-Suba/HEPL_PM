

<?php $__env->startPush('styles'); ?>
    <!-- for sortable content -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/jquery-ui.css')); ?>">

    <!-- to highlight html content -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/default.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- CONTENT WRAPPER START -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card bg-white border-0 b-shadow-4">
                            <div class="card-body ">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-3 f-w-500">#</div>
                                        <div class="col-md-5 f-w-500"><?php echo app('translator')->get('app.fields'); ?></div>
                                        <div class="col-md-4 f-w-500"><?php echo app('translator')->get('app.status'); ?></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <?php if (isset($component)) { $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6 = $component; } ?>
<?php $component = App\View\Components\Form::resolve(['method' => 'PUT'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'editSettings']); ?>
                                        <div id="sortable">
                                            <?php $__currentLoopData = $leadFormFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="row py-3 pt-4 border-bottom">
                                                    <div class="col-md-3">
                                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                                        <input type="hidden" name="sort_order[]"
                                                               value="<?php echo e($item->id); ?>">
                                                    </div>
                                                    <div
                                                        class="col-md-5"><?php echo e(mb_ucwords($item->field_display_name)); ?></div>
                                                    <div class="col-md-4">
                                                        <?php if($item->field_name != 'name'): ?>
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox"
                                                                       class="custom-control-input change-setting"
                                                                       data-setting-id="<?php echo e($item->id); ?>"
                                                                       <?php if($item->status == 'active'): ?> checked <?php endif; ?>
                                                                       id="<?php echo e($item->id); ?>">
                                                                <label class="custom-control-label f-14 cursor-pointer"
                                                                       for="<?php echo e($item->id); ?>"></label>
                                                            </div>
                                                        <?php else: ?>
                                                            --
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6)): ?>
<?php $component = $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6; ?>
<?php unset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6); ?>
<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-4 mb-4">
                        <?php if (isset($component)) { $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e = $component; } ?>
<?php $component = App\View\Components\Cards\Data::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <p class="f-w-500"><?php echo app('translator')->get('modules.lead.iframeSnippet'); ?></p>
                            <code>
                                &lt;iframe src="<?php echo e(route('front.lead_form', [company()->hash])); ?>" width="80%" frameborder="0">&lt;/iframe&gt;
                            </code>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e)): ?>
<?php $component = $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e; ?>
<?php unset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e = $component; } ?>
<?php $component = App\View\Components\Cards\Data::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <p class="f-w-500">Share Direct link</p>
                            <p class="f-12"><a href="<?php echo e(route('front.lead_form', [company()->hash]).'?styled=1'); ?>"
                                               target="_blank"><?php echo e(route('front.lead_form', [company()->hash]).'?styled=1'); ?></a>
                            </p>
                            <p class="f-12"><a
                                    href="<?php echo e(route('front.lead_form', [company()->hash]).'?styled=1&with_logo=1'); ?>"
                                    target="_blank"><?php echo e(route('front.lead_form', [company()->hash]).'?styled=1&with_logo=1'); ?></a>
                            </p>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e)): ?>
<?php $component = $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e; ?>
<?php unset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php if (isset($component)) { $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e = $component; } ?>
<?php $component = App\View\Components\Cards\Data::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <h4><?php echo app('translator')->get('app.preview'); ?></h4>
                    <iframe src="<?php echo e(route('front.lead_form', [company()->hash])); ?>" id="previewIframe" width="100%"
                            onload="resizeIframe(this)" frameborder="0"></iframe>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e)): ?>
<?php $component = $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e; ?>
<?php unset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e); ?>
<?php endif; ?>
                <br>

            </div>

        </div>
    </div>
    <!-- CONTENT WRAPPER END -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <!-- for sortable content -->
    <script src="<?php echo e(asset('vendor/jquery/jquery-ui.min.js')); ?>"></script>

    <!-- to highlight html content -->
    <script src="<?php echo e(asset('vendor/jquery/highlight.min.js')); ?>"></script>

    <script>
        $(function () {
            $("#sortable").sortable({
                update: function (event, ui) {
                    var sortedValues = [];
                    $('input[name="sort_order[]"]').each(function (index, value) {
                        sortedValues[index] = $(this).val();
                    });
                    $.easyAjax({
                        url: "<?php echo e(route('lead-form.sortFields')); ?>",
                        type: "POST",
                        blockUI: true,
                        data: {
                            'sortedValues': sortedValues,
                            '_token': '<?php echo e(csrf_token()); ?>'
                        },
                        success: function(response) {
                            var iframe = document.getElementById('previewIframe');
                            iframe.src = iframe.src;
                        }
                    })
                }
            });
        });

        $('.change-setting').change(function () {
            var id = $(this).data('setting-id');
            var sendEmail = $(this).is(':checked') ? 'active' : 'inactive';

            var url = '<?php echo e(route('lead-form.update', ':id')); ?>';
            url = url.replace(':id', id);
            $.easyAjax({
                url: url,
                type: "POST",
                blockUI: true,
                data: {
                    'id': id,
                    'status': sendEmail,
                    '_method': 'PUT',
                    '_token': '<?php echo e(csrf_token()); ?>'
                },
                success: function(response) {
                    var iframe = document.getElementById('previewIframe');
                    iframe.src = iframe.src;
                }
            })
        });

        function resizeIframe(obj) {
            obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 50 + 'px';
        }
        
        init();
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/HEPL_PM/resources/views/leads/lead-form/index.blade.php ENDPATH**/ ?>