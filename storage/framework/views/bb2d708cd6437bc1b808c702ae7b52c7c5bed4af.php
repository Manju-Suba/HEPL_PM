<script src="<?php echo e(asset('vendor/jquery/frappe-charts.min.iife.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery/Chart.min.js')); ?>"></script>

<div class="row">
    <div class="col-md-12">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'secondary','icon' => 'info-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'secondary','icon' => 'info-circle']); ?>
            <?php echo app('translator')->get('messages.earningChartNote'); ?> (<?php echo e(company()->currency->currency_code); ?>)
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
</div>

<div class="row">
    <?php if(in_array('invoices', $modules) && (in_array('total_paid_invoices', $activeWidgets) || in_array('total_unpaid_invoices', $activeWidgets))): ?>
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div
                class="bg-white p-3 rounded b-shadow-4 d-flex justify-content-between align-items-center mb-4 mb-md-0 mb-lg-0">
                <div class="d-block text-capitalize">
                    <h5 class="f-13 f-w-500 mb-20 text-darkest-grey"><?php echo app('translator')->get('app.menu.invoices'); ?></h5>
                    <div class="d-flex">
                        <?php if(in_array('total_paid_invoices', $activeWidgets)): ?>
                            <a href="javascript:;" id="totalPaidInvoices">
                                <p class="mb-0 f-15 font-weight-bold text-blue d-grid mr-5">
                                    <?php echo e($totalPaidInvoice); ?><span class="f-12 font-weight-normal text-lightest">
                                        <?php echo app('translator')->get('modules.dashboard.totalPaidInvoices'); ?> </span>
                                </p>
                            </a>
                        <?php endif; ?>

                        <?php if(in_array('total_unpaid_invoices', $activeWidgets)): ?>
                            <a href="javascript:;" id="totalPendingInvoices">
                                <p class="mb-0 f-15 font-weight-bold text-red d-grid">
                                    <?php echo e($totalUnPaidInvoice); ?><span
                                        class="f-12 font-weight-normal text-lightest"><?php echo app('translator')->get('modules.dashboard.totalUnpaidInvoices'); ?></span>
                                </p>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="d-block">
                    <i class="fa fa-file-invoice text-lightest f-18"></i>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(in_array('invoices', $modules) && (in_array('total_expenses', $activeWidgets) || in_array('total_earnings', $activeWidgets))): ?>
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div
                class="bg-white p-3 rounded b-shadow-4 d-flex justify-content-between align-items-center mb-4 mb-md-0 mb-lg-0">
                <div class="d-block text-capitalize">
                    <h5 class="f-13 f-w-500 mb-20 text-darkest-grey"><?php echo app('translator')->get('app.menu.finance'); ?></h5>
                    <a href="javascript:;" id="totalEarnings">
                        <div class="d-flex">
                            <?php if(in_array('total_expenses', $activeWidgets)): ?>
                                <p class="mb-0 f-15 font-weight-bold text-blue d-grid mr-5">
                                    <?php echo e(currency_format($totalExpenses)); ?><span
                                        class="f-12 font-weight-normal text-lightest">
                                        <?php echo app('translator')->get('modules.dashboard.totalExpenses'); ?> </span>
                                </p>
                            <?php endif; ?>

                            <?php if(in_array('total_earnings', $activeWidgets)): ?>
                                <p class="mb-0 f-15 font-weight-bold text-dark-green d-grid">
                                    <?php echo e(currency_format($totalEarnings)); ?><span
                                        class="f-12 font-weight-normal text-lightest"><?php echo app('translator')->get('modules.dashboard.totalEarnings'); ?></span>
                                </p>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
                <div class="d-block">
                    <i class="fa fa-coins text-lightest f-18"></i>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(in_array('invoices', $modules) && in_array('total_pending_amount', $activeWidgets)): ?>
        <div class="col-xl-4 col-lg-6 col-md-6">
            <a href="javascript:;" id="totalPendingAmount">
                <?php if (isset($component)) { $__componentOriginal3372d3ef031d7cb240e013bd2685bbb8031ec38a = $component; } ?>
<?php $component = App\View\Components\Cards\Widget::resolve(['title' => __('modules.dashboard.totalPendingAmount'),'value' => currency_format($totalPendingAmount),'icon' => 'coins'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Widget::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3372d3ef031d7cb240e013bd2685bbb8031ec38a)): ?>
<?php $component = $__componentOriginal3372d3ef031d7cb240e013bd2685bbb8031ec38a; ?>
<?php unset($__componentOriginal3372d3ef031d7cb240e013bd2685bbb8031ec38a); ?>
<?php endif; ?>
            </a>
        </div>
    <?php endif; ?>

</div>

<div class="row">
    <?php if(in_array('invoices', $modules) && in_array('invoice_overview', $activeWidgets)): ?>
        <div class="col-sm-12 col-lg-6 mt-4">
            <?php if (isset($component)) { $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e = $component; } ?>
<?php $component = App\View\Components\Cards\Data::resolve(['title' => __('modules.dashboard.invoiceOverview').' <i class=\'fa fa-question-circle\' data-toggle=\'popover\' data-placement=\'top\' data-content=\''.__('messages.invoicesWidgetMessage').'\' data-trigger=\'hover\'></i>'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8 = $component; } ?>
<?php $component = App\View\Components\PieChart::resolve(['labels' => $invoiceOverviewChartData['labels'],'values' => $invoiceOverviewChartData['values'],'colors' => $invoiceOverviewChartData['colors']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pie-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PieChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'task-chart1','height' => '300','width' => '300']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8)): ?>
<?php $component = $__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8; ?>
<?php unset($__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e)): ?>
<?php $component = $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e; ?>
<?php unset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if(in_array('estimates', $modules) && in_array('estimate_overview', $activeWidgets)): ?>
        <div class="col-sm-12 col-lg-6 mt-4">
            <?php if (isset($component)) { $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e = $component; } ?>
<?php $component = App\View\Components\Cards\Data::resolve(['title' => __('modules.dashboard.estimateOverview').' <i class=\'fa fa-question-circle\' data-toggle=\'popover\' data-placement=\'top\' data-content=\''.__('messages.estimatesWidgetMessage').'\' data-trigger=\'hover\'></i>'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8 = $component; } ?>
<?php $component = App\View\Components\PieChart::resolve(['labels' => $estimateOverviewChartData['labels'],'values' => $estimateOverviewChartData['values'],'colors' => $estimateOverviewChartData['colors']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pie-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PieChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'task-chart2','height' => '300','width' => '300']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8)): ?>
<?php $component = $__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8; ?>
<?php unset($__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e)): ?>
<?php $component = $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e; ?>
<?php unset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if(in_array('leads', $modules) && in_array('proposal_overview', $activeWidgets)): ?>
        <div class="col-sm-12 col-lg-6 mt-4">
            <?php if (isset($component)) { $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e = $component; } ?>
<?php $component = App\View\Components\Cards\Data::resolve(['title' => __('modules.dashboard.proposalOverview').' <i class=\'fa fa-question-circle\' data-toggle=\'popover\' data-placement=\'top\' data-content=\''.__('messages.proposalsWidgetMessage').'\' data-trigger=\'hover\'></i>'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8 = $component; } ?>
<?php $component = App\View\Components\PieChart::resolve(['labels' => $proposalOverviewChartData['labels'],'values' => $proposalOverviewChartData['values'],'colors' => $proposalOverviewChartData['colors']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pie-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PieChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'task-chart3','height' => '300','width' => '300']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8)): ?>
<?php $component = $__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8; ?>
<?php unset($__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e)): ?>
<?php $component = $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e; ?>
<?php unset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if(in_array('payments', $modules) && in_array('earnings_by_client', $activeWidgets)): ?>
        <div class="col-sm-12 col-lg-6 mt-4">
            <?php if (isset($component)) { $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e = $component; } ?>
<?php $component = App\View\Components\Cards\Data::resolve(['title' => __('modules.dashboard.clientWiseEarnings').' <i class=\'fa fa-question-circle\' data-toggle=\'popover\' data-placement=\'top\' data-content=\''.__('messages.earningChartNote').'\' data-trigger=\'hover\'></i>'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal4e65df8a9648483ff8a2bf21a107646914efde53 = $component; } ?>
<?php $component = App\View\Components\BarChart::resolve(['chartData' => $clientEarningChart] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bar-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BarChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'task-chart4','height' => '300']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4e65df8a9648483ff8a2bf21a107646914efde53)): ?>
<?php $component = $__componentOriginal4e65df8a9648483ff8a2bf21a107646914efde53; ?>
<?php unset($__componentOriginal4e65df8a9648483ff8a2bf21a107646914efde53); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e)): ?>
<?php $component = $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e; ?>
<?php unset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if(in_array('payments', $modules) && in_array('projects', $modules) && in_array('earnings_by_projects', $activeWidgets)): ?>
        <div class="col-sm-12 col-lg-6 mt-4">
            <?php if (isset($component)) { $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e = $component; } ?>
<?php $component = App\View\Components\Cards\Data::resolve(['title' => __('modules.dashboard.earningsByProjects').' <i class=\'fa fa-question-circle\' data-toggle=\'popover\' data-placement=\'top\' data-content=\''.__('messages.earningChartNote').'\' data-trigger=\'hover\'></i>'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal4e65df8a9648483ff8a2bf21a107646914efde53 = $component; } ?>
<?php $component = App\View\Components\BarChart::resolve(['chartData' => $projectEarningChartData] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bar-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BarChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'task-chart5','height' => '300']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4e65df8a9648483ff8a2bf21a107646914efde53)): ?>
<?php $component = $__componentOriginal4e65df8a9648483ff8a2bf21a107646914efde53; ?>
<?php unset($__componentOriginal4e65df8a9648483ff8a2bf21a107646914efde53); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e)): ?>
<?php $component = $__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e; ?>
<?php unset($__componentOriginalf463d4507b04ddbb1ec93225959f845404a19c7e); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

</div>

<script>
    $('#save-dashboard-widget').click(function() {
        $.easyAjax({
            url: "<?php echo e(route('dashboard.widget', 'admin-finance-dashboard')); ?>",
            container: '#dashboardWidgetForm',
            blockUI: true,
            type: "POST",
            redirect: true,
            data: $('#dashboardWidgetForm').serialize(),
            success: function() {
                window.location.reload();
            }
        })
    });

    $('#totalPendingAmount').click(function() {
        var dateRange = $('#datatableRange2').data('daterangepicker');
        var startDate = dateRange.startDate.format('<?php echo e(company()->moment_date_format); ?>');
        var endDate = dateRange.endDate.format('<?php echo e(company()->moment_date_format); ?>');

        startDate = encodeURIComponent(startDate);
        endDate = encodeURIComponent(endDate);

        var url = "<?php echo e(route('invoices.index')); ?>";
        string = `?status=pending&start=${startDate}&end=${endDate}`;
        url += string;
        window.location.href = url;
    });

    $('#totalEarnings').click(function() {
        var dateRange = getDateRange();
        var url = `<?php echo e(route('income-expense-report.index')); ?>`;

        string = `?start=${dateRange.startDate}&end=${dateRange.endDate}`;
        url += string;

        window.location.href = url;
    });

    $('#totalPaidInvoices').click(function() {
        var dateRange = getDateRange();
        var url = `<?php echo e(route('invoices.index') . '?status=paid'); ?>`;

        string = `&start=${dateRange.startDate}&end=${dateRange.endDate}`;
        url += string;

        window.location.href = url;
    });

    $('#totalPendingInvoices').click(function() {
        var dateRange = getDateRange();
        var url = `<?php echo e(route('invoices.index') . '?status=pending'); ?>`;

        string = `&start=${dateRange.startDate}&end=${dateRange.endDate}`;
        url += string;

        window.location.href = url;
    });

    function getDateRange() {
        var dateRange = $('#datatableRange2').data('daterangepicker');
        var startDate = dateRange.startDate.format('<?php echo e(company()->moment_date_format); ?>');
        var endDate = dateRange.endDate.format('<?php echo e(company()->moment_date_format); ?>');

        startDate = encodeURIComponent(startDate);
        endDate = encodeURIComponent(endDate);

        var data = [];
        data['startDate'] = startDate;
        data['endDate'] = endDate;

        return data;
    }
</script>
<?php /**PATH /var/www/HEPL_PM/resources/views/dashboard/ajax/finance.blade.php ENDPATH**/ ?>