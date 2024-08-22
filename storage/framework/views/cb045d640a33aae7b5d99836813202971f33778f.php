<?php if (isset($component)) { $__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8 = $component; } ?>
<?php $component = App\View\Components\PieChart::resolve(['labels' => $chartData['labels'],'values' => $chartData['values'],'colors' => $chartData['colors']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pie-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PieChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'task-chart','height' => '250','width' => '300']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8)): ?>
<?php $component = $__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8; ?>
<?php unset($__componentOriginal4092e086ee856e52c87e0ceff9be7ed5cf6c57d8); ?>
<?php endif; ?>
<?php /**PATH /var/www/HEPL_PM/resources/views/reports/tasks/chart.blade.php ENDPATH**/ ?>