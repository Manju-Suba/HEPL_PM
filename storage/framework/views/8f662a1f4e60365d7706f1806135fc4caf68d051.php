<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta field_name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/all.min.css')); ?>">

    <!-- Template CSS -->
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo e(asset('css/main.css')); ?>">

    <!-- DatePicker CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/datepicker.min.css')); ?>">


    <title><?php echo app('translator')->get($pageTitle); ?></title>
    <meta field_name="msapplication-TileColor" content="#ffffff">
    <meta field_name="msapplication-TileImage" content="<?php echo e($globalSetting->favicon_url); ?>">
    <meta field_name="theme-color" content="#ffffff">

    <?php echo $__env->make('sections.theme_css', ['company' => $company], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(isset($activeSettingMenu)): ?>
        <style>
            .preloader-container {
                margin-left: 510px;
                width: calc(100% - 510px)
            }

        </style>
    <?php endif; ?>

    <?php echo $__env->yieldPushContent('styles'); ?>

    <style>
        :root {
            --fc-border-color: #E8EEF3;
            --fc-button-text-color: #99A5B5;
            --fc-button-border-color: #99A5B5;
            --fc-button-bg-color: #ffffff;
            --fc-button-active-bg-color: #171f29;
            --fc-today-bg-color: #f2f4f7;
        }

        .fc a[data-navlink] {
            color: #99a5b5;
        }

        img {
            width: 50px;
            margin-top: 20px;
        }

        .box {
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>

</head>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


<body><!-- change dark theme class according to application dark theme setting -->

<div class="box">

    <div class="<?php if($styled == 1): ?> col-md-6 <?php else: ?> col-md-12 <?php endif; ?>">
        <?php if($withLogo == 1): ?>
            <div class="text-center">
                <img src="<?php echo e($company->logo_url); ?>" alt="<?php echo e($company->company_name); ?>"
                     class="text-center" height="50px"/>
            </div>
        <?php endif; ?>
        <div class="white-box p-t-20 border-dark">
            <?php if (isset($component)) { $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6 = $component; } ?>
<?php $component = App\View\Components\Form::resolve(['method' => 'POST'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'createLead']); ?>
                <div class="form-body">
                    <div class="row">

                        <?php $__currentLoopData = $leadFormFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item->custom_fields_id === null): ?>

                                <?php if($item->field_name == 'country'): ?>
                                    <div class="col-md-6">
                                        <?php if (isset($component)) { $__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381 = $component; } ?>
<?php $component = App\View\Components\Forms\Select::resolve(['fieldId' => 'country','fieldLabel' => __('modules.leads.'.$item->field_name),'fieldName' => $item->field_name,'fieldRequired' => $item->required == 1,'search' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                            <option value="">--</option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option data-tokens="<?php echo e($item->iso3); ?>"
                                                        data-content="<span class='flag-icon flag-icon-<?php echo e(strtolower($item->iso)); ?> flag-icon-squared'></span> <?php echo e($item->nicename); ?>"
                                                        value="<?php echo e($item->nicename); ?>"><?php echo e($item->nicename); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381)): ?>
<?php $component = $__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381; ?>
<?php unset($__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381); ?>
<?php endif; ?>
                                    </div>
                                <?php elseif($item->field_name == 'message'): ?>
                                    <div class="col-md-6">
                                        <?php if (isset($component)) { $__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11 = $component; } ?>
<?php $component = App\View\Components\Forms\Textarea::resolve(['fieldId' => '$item->field_name','fieldLabel' => __('modules.leads.'.$item->field_name),'fieldName' => '$item->field_name','fieldRequired' => $item->required == 1] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <?php else: ?>
                                    <div class="col-md-6">
                                        <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldId' => $item->field_name,'fieldLabel' => __('modules.leads.'.$item->field_name),'fieldName' => $item->field_name,'fieldRequired' => $item->required == 1] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Text::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab)): ?>
<?php $component = $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab; ?>
<?php unset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab); ?>
<?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php if($item->customField->type == 'text'): ?>
                                    <div class="col-md-6">
                                        <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldId' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldLabel' => mb_ucwords($item->field_display_name),'fieldName' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldRequired' => ($item->required === 1) ? true : false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Text::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab)): ?>
<?php $component = $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab; ?>
<?php unset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab); ?>
<?php endif; ?>
                                    </div>
                                <?php elseif($item->customField->type == 'password'): ?>
                                    <div class="col-md-6">
                                        <?php if (isset($component)) { $__componentOriginal48b3a418fdb9f7d4bd9204ec3036a721ea2be229 = $component; } ?>
<?php $component = App\View\Components\Forms\Password::resolve(['fieldId' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldLabel' => mb_ucwords($item->field_display_name),'fieldName' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldPlaceholder' => $item->label,'fieldRequired' => ($item->required === 1) ? true : false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Password::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48b3a418fdb9f7d4bd9204ec3036a721ea2be229)): ?>
<?php $component = $__componentOriginal48b3a418fdb9f7d4bd9204ec3036a721ea2be229; ?>
<?php unset($__componentOriginal48b3a418fdb9f7d4bd9204ec3036a721ea2be229); ?>
<?php endif; ?>
                                    </div>
                                <?php elseif($item->customField->type == 'number'): ?>
                                    <div class="col-md-6">
                                        <?php if (isset($component)) { $__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c = $component; } ?>
<?php $component = App\View\Components\Forms\Number::resolve(['fieldId' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldLabel' => mb_ucwords($item->field_display_name),'fieldName' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldRequired' => ($item->required === 1) ? true : false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Number::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c)): ?>
<?php $component = $__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c; ?>
<?php unset($__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c); ?>
<?php endif; ?>
                                    </div>
                                <?php elseif($item->customField->type == 'textarea'): ?>
                                    <div class="col-md-6">
                                        <?php if (isset($component)) { $__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11 = $component; } ?>
<?php $component = App\View\Components\Forms\Textarea::resolve(['fieldLabel' => mb_ucwords($item->field_display_name),'fieldName' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldId' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldRequired' => ($item->required === 1) ? true : false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <?php elseif($item->customField->type == 'radio'): ?>
                                    <div class="col-md-6">
                                        <div class="form-group my-3">
                                            <?php if (isset($component)) { $__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad = $component; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldLabel' => mb_ucwords($item->field_display_name),'fieldRequired' => ($item->required === 1) ? true : false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <div class="d-flex">
                                                <?php $__currentLoopData = json_decode($item->customField->values); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if (isset($component)) { $__componentOriginald8738d15765d6b35d603018b407a63f14ee18785 = $component; } ?>
<?php $component = App\View\Components\Forms\Radio::resolve(['fieldId' => 'optionsRadios'.e($key . $item->customField->id).'','fieldLabel' => $value,'fieldName' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldValue' => $value,'checked' => ($key == 0) ? true : false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Radio::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8738d15765d6b35d603018b407a63f14ee18785)): ?>
<?php $component = $__componentOriginald8738d15765d6b35d603018b407a63f14ee18785; ?>
<?php unset($__componentOriginald8738d15765d6b35d603018b407a63f14ee18785); ?>
<?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php elseif($item->customField->type == 'select'): ?>
                                    <div class="col-md-6">
                                        <div class="form-group my-3">
                                            <?php if (isset($component)) { $__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381 = $component; } ?>
<?php $component = App\View\Components\Forms\Select::resolve(['fieldId' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldLabel' => mb_ucwords($item->field_display_name),'fieldName' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldRequired' => ($item->required === 1) ? true : false,'search' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                                <option value="">--</option>
                                                <?php $__currentLoopData = json_decode($item->customField->values); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381)): ?>
<?php $component = $__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381; ?>
<?php unset($__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381); ?>
<?php endif; ?>
                                        </div>
                                    </div>
                                <?php elseif($item->customField->type == 'date'): ?>
                                    <div class="col-md-6">
                                        <?php if (isset($component)) { $__componentOriginal375ba69c4c90abc0fec300a948e1f40a31222641 = $component; } ?>
<?php $component = App\View\Components\Forms\Datepicker::resolve(['custom' => 'true','fieldId' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldRequired' => ($item->required === 1) ? true : false,'fieldLabel' => mb_ucwords($item->field_display_name),'fieldName' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldValue' => now()->timezone($company->timezone)->format($company->date_format),'fieldPlaceholder' => $item->label] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.datepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Datepicker::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal375ba69c4c90abc0fec300a948e1f40a31222641)): ?>
<?php $component = $__componentOriginal375ba69c4c90abc0fec300a948e1f40a31222641; ?>
<?php unset($__componentOriginal375ba69c4c90abc0fec300a948e1f40a31222641); ?>
<?php endif; ?>
                                    </div>
                                <?php elseif($item->customField->type == 'checkbox'): ?>
                                    <div class="col-md-6">
                                        <div class="form-group my-3">
                                            <?php if (isset($component)) { $__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad = $component; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => 'custom_fields_data['.e($item->field_name . '_' . $item->customField->id).']','fieldLabel' => mb_ucwords($item->field_display_name),'fieldRequired' => ($item->required === 1) ? true : false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <div class="d-flex checkbox-<?php echo e($item->customField->id); ?>">
                                                <input type="hidden"
                                                       field_name="custom_fields_data[<?php echo e($item->field_name.'_'.$item->customField->id); ?>]"
                                                       id="<?php echo e($item->field_name.'_'.$item->customField->id); ?>">
                                                <?php $__currentLoopData = json_decode($item->customField->values); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if (isset($component)) { $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e = $component; } ?>
<?php $component = App\View\Components\Forms\Checkbox::resolve(['fieldId' => 'optionsRadios'.e($key . $item->customField->id).'','fieldLabel' => $value,'fieldName' => '$item->field_name.\'_\'.$item->customField->id.\'[]\'','fieldValue' => $value] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Checkbox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onchange' => 'checkboxChange(\'checkbox-'.e($item->customField->id).'\', \''.e($item->field_name.'_'.$item->customField->id).'\')','fieldRequired' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(($item->required === 1) ? true : false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e)): ?>
<?php $component = $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e; ?>
<?php unset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e); ?>
<?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php elseif($item->customField->type == 'file'): ?>
                                    <div class="col-md-6">
                                        <input type="hidden" name="custom_fields_data[<?php echo e($item->field_name.'_'.$item->customField->id); ?>]" >
                                        <?php if (isset($component)) { $__componentOriginaldaadf847fbf915f597d5e97d12ca0ad02b95e908 = $component; } ?>
<?php $component = App\View\Components\Forms\File::resolve(['fieldLabel' => mb_ucwords($item->field_display_name),'fieldRequired' => ($item->required === 1) ? true : false,'fieldName' => 'custom_fields_data[' . $item->field_name . '_' . $item->customField->id . ']','fieldId' => 'custom_fields_data[' . $item->field_name . '_' . $item->customField->id . ']','fieldValue' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\File::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldaadf847fbf915f597d5e97d12ca0ad02b95e908)): ?>
<?php $component = $__componentOriginaldaadf847fbf915f597d5e97d12ca0ad02b95e908; ?>
<?php unset($__componentOriginaldaadf847fbf915f597d5e97d12ca0ad02b95e908); ?>
<?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($globalSetting->google_recaptcha_status == 'active' && $globalSetting->google_recaptcha_v2_status == 'active'): ?>
                            <div class="col-md-12 col-lg-12 mt-2 mb-2" id="captcha_container"></div>
                        <?php endif; ?>

                        
                        <input type="hidden" id="g_recaptcha" field_name="g_recaptcha">

                        <?php if($errors->has('g-recaptcha-response')): ?>
                            <div class="help-block with-errors"><?php echo e($errors->first('g-recaptcha-response')); ?></div>
                        <?php endif; ?>

                    </div>
                </div>
                <input type="hidden" name="company_id" value="<?php echo e($company->id); ?>">
                <div class="form-actions">
                    <button type="submit" id="save-form" class="btn btn-primary"><i
                            class="fa fa-check"></i> <?php echo app('translator')->get('app.save'); ?></button>
                    <button type="reset" class="btn btn-secondary ml-3"><?php echo app('translator')->get('app.reset'); ?></button>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6)): ?>
<?php $component = $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6; ?>
<?php unset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6); ?>
<?php endif; ?>

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="alert alert-success" id="success-message" style="display:none"></div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>


<!-- jQuery -->
<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>

<!-- Global Required Javascript -->
<script src="<?php echo e(asset('vendor/bootstrap/javascript/bootstrap-native.js')); ?>"></script>

<!-- Font Awesome -->
<script src="<?php echo e(asset('vendor/jquery/all.min.js')); ?>"></script>

<!-- Template JS -->
<script src="<?php echo e(asset('js/main.js')); ?>"></script>

<script>
    const MODAL_LG = '#myModal';
    const MODAL_XL = '#myModalXl';

    const dropifyMessages = {
        default: "<?php echo app('translator')->get('app.dragDrop'); ?>",
        replace: "<?php echo app('translator')->get('app.dragDropReplace'); ?>",
        remove: "<?php echo app('translator')->get('app.remove'); ?>",
        error: "<?php echo app('translator')->get('messages.errorOccured'); ?>",
    };

    $(window).on('load', function () {
        // Animate loader off screen
        init();
        $(".preloader-container").fadeOut("slow", function() {
            $(this).removeClass("d-flex");
        });
    });

    const datepickerConfig = {
        formatter: (input, date, instance) => {
            input.value = moment(date).format('<?php echo e($globalSetting->moment_format); ?>')
        },
        showAllDates: true,
        customDays: ["<?php echo app('translator')->get('app.weeks.Sun'); ?>", "<?php echo app('translator')->get('app.weeks.Mon'); ?>", "<?php echo app('translator')->get('app.weeks.Tue'); ?>",
            "<?php echo app('translator')->get('app.weeks.Wed'); ?>", "<?php echo app('translator')->get('app.weeks.Thu'); ?>", "<?php echo app('translator')->get('app.weeks.Fri'); ?>",
            "<?php echo app('translator')->get('app.weeks.Sat'); ?>"
        ],
        customMonths: ["<?php echo app('translator')->get('app.months.January'); ?>", "<?php echo app('translator')->get('app.months.February'); ?>",
            "<?php echo app('translator')->get('app.months.March'); ?>", "<?php echo app('translator')->get('app.months.April'); ?>", "<?php echo app('translator')->get('app.months.May'); ?>",
            "<?php echo app('translator')->get('app.months.June'); ?>", "<?php echo app('translator')->get('app.months.July'); ?>", "<?php echo app('translator')->get('app.months.August'); ?>",
            "<?php echo app('translator')->get('app.months.September'); ?>", "<?php echo app('translator')->get('app.months.October'); ?>",
            "<?php echo app('translator')->get('app.months.November'); ?>", "<?php echo app('translator')->get('app.months.December'); ?>"
        ],
        customOverlayMonths: ["<?php echo app('translator')->get('app.monthsShort.Jan'); ?>", "<?php echo app('translator')->get('app.monthsShort.Feb'); ?>",
            "<?php echo app('translator')->get('app.monthsShort.Mar'); ?>", "<?php echo app('translator')->get('app.monthsShort.Apr'); ?>",
            "<?php echo app('translator')->get('app.monthsShort.May'); ?>", "<?php echo app('translator')->get('app.monthsShort.Jun'); ?>",
            "<?php echo app('translator')->get('app.monthsShort.Jul'); ?>", "<?php echo app('translator')->get('app.monthsShort.Aug'); ?>",
            "<?php echo app('translator')->get('app.monthsShort.Sep'); ?>", "<?php echo app('translator')->get('app.monthsShort.Oct'); ?>",
            "<?php echo app('translator')->get('app.monthsShort.Nov'); ?>", "<?php echo app('translator')->get('app.monthsShort.Dec'); ?>"
        ],
        overlayButton: "<?php echo app('translator')->get('app.submit'); ?>",
        overlayPlaceholder: "<?php echo app('translator')->get('app.enterYear'); ?>",
        startDay: parseInt("<?php echo e(attendance_setting()->week_start_from); ?>")
    };
</script>
<script>

    if ($('.custom-date-picker').length > 0) {
        datepicker('.custom-date-picker', {
            position: 'bl',
            ...datepickerConfig
        });
    }

    $(".select-picker").selectpicker();

    $('#save-form').click(function () {
        $.easyAjax({
            url: "<?php echo e(route('front.lead_store')); ?>",
            container: '#createLead',
            type: "POST",
            redirect: true,
            disableButton: true,
            file: true,
            blockUI: true,
            data: $('#createLead').serialize(),
            success: function (response) {
                if (response.status == "success") {
                    $('#createLead')[0].reset();
                    $('#createLead').hide();
                    $('#success-message').html(response.message);
                    $('#success-message').show();
                }
            }
        })
    });
</script>

<?php if($globalSetting->google_recaptcha_status == 'active' && $globalSetting->google_recaptcha_v2_status == 'active'): ?>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
            async defer></script>
    <script>
        var gcv3;
        var onloadCallback = function () {
            // Renders the HTML element with id 'captcha_container' as a reCAPTCHA widget.
            // The id of the reCAPTCHA widget is assigned to 'gcv3'.
            gcv3 = grecaptcha.render('captcha_container', {
                'sitekey': '<?php echo e($globalSetting->google_recaptcha_v2_site_key); ?>',
                'theme': 'light',
                'callback': function (response) {
                    if (response) {
                        $('#g_recaptcha').val(response);
                    }
                },
            });
        };
    </script>
<?php endif; ?>

<?php if($globalSetting->google_recaptcha_status == 'active' && $globalSetting->google_recaptcha_v3_status == 'active'): ?>
    <script
        src="https://www.google.com/recaptcha/api.js?render=<?php echo e($globalSetting->google_recaptcha_v3_site_key); ?>"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('<?php echo e($globalSetting->google_recaptcha_v3_site_key); ?>').then(function (token) {
                // Add your logic to submit to your backend server here.
                $('#g_recaptcha').val(token);
            });
        });
    </script>
<?php endif; ?>

</html>
<?php /**PATH /var/www/HEPL_PM/resources/views/lead-form.blade.php ENDPATH**/ ?>