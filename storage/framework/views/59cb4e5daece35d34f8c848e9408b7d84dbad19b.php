<style>
    .rating-stars ul {
        list-style-type: none;
        padding: 0;
        -moz-user-select: none;
        -webkit-user-select: none;
    }

    .rating-stars ul>li.star {
        display: inline-block;
        margin: 1px;
    }

    /* Idle State of the stars */
    .rating-stars ul>li.star>i.fa {
        /* font-size: 1.6em; */
        /* Change the size of the stars */
        color: #ccc;
        /* Color on idle state */
    }

    /* Hover state of the stars */
    .rating-stars ul>li.star.hover>i.fa {
        color: var(--header_color);
    }

    /* Selected state of the stars */
    .rating-stars ul>li.star.selected>i.fa {
        color: var(--header_color);
    }

    .selected {
        color: var(--header_color);
    }

</style>

<!-- ROW START -->
<div class="row py-3 py-lg-5 py-md-5">

    <div class="col-lg-12 col-md-12 mb-4 mb-xl-0 mb-lg-4">

        <?php if(in_array('client', user_roles())): ?>
            <?php if (isset($component)) { $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6 = $component; } ?>
<?php $component = App\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'save-project-rating-form']); ?>
                <div class="add-client rounded bg-white">
                    <div class="row p-20">

                        
                        <input type="hidden" id="ratingID" <?php if(!is_null($project->rating)): ?> value="<?php echo e($project->rating->id); ?>" <?php endif; ?>>

                        <div class="col-md-12">
                            <?php if (isset($component)) { $__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad = $component; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldLabel' => __('app.menu.projectRating'),'fieldId' => 'project-rating'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad)): ?>
<?php $component = $__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad; ?>
<?php unset($__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad); ?>
<?php endif; ?>
                            <div class="rating-stars">
                                <ul id="stars">
                                    <li class="star <?php if(!is_null($project->rating) &&
                                        $project->rating->rating >= 1): ?> selected <?php endif; ?>"
                                        title="Poor" data-value="1">
                                        <i class="fa fa-star f-18"></i>
                                    </li>
                                    <li class="star <?php if(!is_null($project->rating) &&
                                        $project->rating->rating >= 2): ?> selected <?php endif; ?>"
                                        title="Fair" data-value="2">
                                        <i class="fa fa-star f-18"></i>
                                    </li>
                                    <li class="star <?php if(!is_null($project->rating) &&
                                        $project->rating->rating >= 3): ?> selected <?php endif; ?>"
                                        title="Good" data-value="3">
                                        <i class="fa fa-star f-18"></i>
                                    </li>
                                    <li class="star <?php if(!is_null($project->rating) &&
                                        $project->rating->rating >= 4): ?> selected <?php endif; ?>"
                                        title="Excellent" data-value="4">
                                        <i class="fa fa-star f-18"></i>
                                    </li>
                                    <li class="star <?php if(!is_null($project->rating) &&
                                        $project->rating->rating >= 5): ?> selected <?php endif; ?>"
                                        title="WOW!!!" data-value="5">
                                        <i class="fa fa-star f-18"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-12 mt-4">
                            <?php if (isset($component)) { $__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11 = $component; } ?>
<?php $component = App\View\Components\Forms\Textarea::resolve(['fieldId' => 'comment','fieldName' => 'comment','fieldLabel' => __('app.comment'),'fieldValue' => (!is_null($project->rating) ? $project->rating->comment : '')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11)): ?>
<?php $component = $__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11; ?>
<?php unset($__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11); ?>
<?php endif; ?>
                        </div>
                    </div>

                    <!-- CANCEL SAVE SEND START -->
                    <div class="px-lg-4 px-md-4 px-3 py-3 c-inv-btns">
                        <div class="d-flex">
                            <?php if (isset($component)) { $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480 = $component; } ?>
<?php $component = App\View\Components\Forms\ButtonPrimary::resolve(['icon' => 'check'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonPrimary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'save-form']); ?><?php echo app('translator')->get('app.save'); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480)): ?>
<?php $component = $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480; ?>
<?php unset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480); ?>
<?php endif; ?>
                        </div>
                    </div>
                    <!-- CANCEL SAVE SEND END -->

                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6)): ?>
<?php $component = $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6; ?>
<?php unset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6); ?>
<?php endif; ?>
        <?php endif; ?>

        <div class="add-client rounded bg-white">
            <div class="row p-20">

                <?php if(!is_null($project->rating)): ?>
                    <?php if(
                        $viewRatingPermission == 'all'
                        || ($viewRatingPermission == 'added' && $project->rating->added_by == user()->id)
                        || ($viewRatingPermission == 'owned' && $project->client_id == user()->id)
                        || ($viewRatingPermission == 'both' && ($project->client_id == user()->id || $project->rating->added_by == user()->id))
                        ): ?>
                
                        <div class="col-md-12 mt-1">
                            <div class="rating-stars">
                                <ul id="stars">
                                    <li class="star <?php if($project->rating->rating >= 1): ?> selected <?php endif; ?>" title="Poor" data-value="1">
                                        <i class="fa fa-star f-18"></i>
                                    </li>
                                    <li class="star <?php if($project->rating->rating >= 2): ?> selected <?php endif; ?>" title="Fair" data-value="2">
                                        <i class="fa fa-star f-18"></i>
                                    </li>
                                    <li class="star <?php if($project->rating->rating >= 3): ?> selected <?php endif; ?>" title="Good" data-value="3">
                                        <i class="fa fa-star f-18"></i>
                                    </li>
                                    <li class="star <?php if($project->rating->rating >= 4): ?> selected <?php endif; ?>" title="Excellent" data-value="4">
                                        <i class="fa fa-star f-18"></i>
                                    </li>
                                    <li class="star <?php if($project->rating->rating >= 5): ?> selected <?php endif; ?>" title="WOW!!!" data-value="5">
                                        <i class="fa fa-star f-18"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <blockquote class="blockquote">
                                <p class="mb-0"><?php echo e(nl2br($project->rating->comment)); ?></p>
                                <footer class="blockquote-footer"><?php echo e($project->client->name); ?></footer>
                            </blockquote>
                        </div>
                    <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33 = $component; } ?>
<?php $component = App\View\Components\Cards\NoRecord::resolve(['icon' => 'star','message' => __('modules.projects.noRatingAvailable')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.no-record'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\NoRecord::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33)): ?>
<?php $component = $__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33; ?>
<?php unset($__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33); ?>
<?php endif; ?>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33 = $component; } ?>
<?php $component = App\View\Components\Cards\NoRecord::resolve(['icon' => 'star','message' => __('modules.projects.noRatingAvailable')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.no-record'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\NoRecord::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33)): ?>
<?php $component = $__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33; ?>
<?php unset($__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33); ?>
<?php endif; ?>
                <?php endif; ?>

            </div>
        </div>

    </div>
</div>

<?php if(in_array('client', user_roles())): ?>
    <script>
        $(document).ready(function() {
            var ratingValue = "<?php echo e(!is_null($project->rating) ? $project->rating->rating : 0); ?>";

            /* 1. Visualizing things on Hover - See next part for action on click */
            $('#stars li').on('mouseover', function() {
                var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

                // Now highlight all the stars that's not after the current hovered star
                $(this).parent().children('li.star').each(function(e) {
                    if (e < onStar) {
                        $(this).addClass('hover');
                    } else {
                        $(this).removeClass('hover');
                    }
                });
            }).on('mouseout', function() {
                $(this).parent().children('li.star').each(function(e) {
                    $(this).removeClass('hover');
                });
            });

            /* 2. Action to perform on click */
            $('#stars li').on('click', function() {
                var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                var stars = $(this).parent().children('li.star');

                for (i = 0; i < stars.length; i++) {
                    $(stars[i]).removeClass('selected');
                }

                for (i = 0; i < onStar; i++) {
                    $(stars[i]).addClass('selected');
                }

                ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            });

            $('.save-form').click(function() {

                var token = "<?php echo e(csrf_token()); ?>";
                var url = "<?php echo e(route('project-ratings.store')); ?>";
                var method = 'POST';
                var ratingID = $('#ratingID').val();

                if (ratingID) {
                    url = "<?php echo e(route('project-ratings.update', ':id')); ?>";
                    url = url.replace(':id', ratingID);
                    method = 'PUT';
                }

                if (ratingValue !== 0) {
                    $.easyAjax({
                        url: url,
                        container: "#save-project-rating-form",
                        type: "POST",
                        blockUI: true,
                        redirect: true,
                        data: {
                            'rating': ratingValue,
                            'project_id': <?php echo e($project->id); ?>,
                            'comment': $('#comment').val(),
                            '_token': token,
                            '_method': method
                        }
                    })
                }
            });
        });
    </script>
<?php endif; ?>
<?php /**PATH /var/www/HEPL_PM/resources/views/projects/ajax/rating.blade.php ENDPATH**/ ?>