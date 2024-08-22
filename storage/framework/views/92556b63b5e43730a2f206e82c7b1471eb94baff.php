<?php
$discussion = \App\Models\Discussion::find($notification->data['id']);
$projectId = $notification->data['project_id'];
$notificationUser = \App\Models\User::findOrFail($discussion->user_id);
$route = route('projects.show', $projectId) . '?tab=discussion';
?>

<?php if (isset($component)) { $__componentOriginale153604eddcfbd33516a6ef226b976900d113638 = $component; } ?>
<?php $component = App\View\Components\Cards\Notification::resolve(['notification' => $notification,'link' => $route,'image' => $notificationUser->image_url,'title' => __('email.discussion.subject'),'text' => ucfirst($notification->data['title']),'time' => $notification->created_at] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.notification'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Notification::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale153604eddcfbd33516a6ef226b976900d113638)): ?>
<?php $component = $__componentOriginale153604eddcfbd33516a6ef226b976900d113638; ?>
<?php unset($__componentOriginale153604eddcfbd33516a6ef226b976900d113638); ?>
<?php endif; ?>
<?php /**PATH /var/www/HEPL_PM/resources/views/notifications/all/new_discussion.blade.php ENDPATH**/ ?>