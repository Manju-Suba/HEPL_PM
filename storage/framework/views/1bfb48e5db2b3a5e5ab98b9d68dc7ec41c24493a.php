<div class="col-lg-12 col-md-12 ntfcn-tab-content-left w-100 p-4 ">
    <?php echo method_field('PUT'); ?>
    <div class="row">

        <div class="col-lg-12">
            <div class="row mt-3">

                <div class="col-lg-12 mb-2">
                    <?php if (isset($component)) { $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e = $component; } ?>
<?php $component = App\View\Components\Forms\Checkbox::resolve(['fieldLabel' => __('modules.attendance.allowShiftChange'),'fieldName' => 'allow_shift_change','fieldId' => 'allow_shift_change','fieldValue' => 'yes','checked' => $attendanceSetting->allow_shift_change] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Checkbox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['fieldRequired' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e)): ?>
<?php $component = $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e; ?>
<?php unset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e); ?>
<?php endif; ?>
                </div>

                <div class="col-lg-12 mb-2">
                    <?php if (isset($component)) { $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e = $component; } ?>
<?php $component = App\View\Components\Forms\Checkbox::resolve(['fieldLabel' => __('modules.attendance.saveCurrentLocation'),'fieldName' => 'save_current_location','fieldId' => 'save_current_location','fieldValue' => 'yes','checked' => $attendanceSetting->save_current_location] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Checkbox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['fieldRequired' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e)): ?>
<?php $component = $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e; ?>
<?php unset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e); ?>
<?php endif; ?>
                </div>

                <div class="col-lg-12 mb-2">
                    <?php if (isset($component)) { $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e = $component; } ?>
<?php $component = App\View\Components\Forms\Checkbox::resolve(['fieldLabel' => __('modules.attendance.allowSelfClock'),'fieldName' => 'employee_clock_in_out','fieldId' => 'employee_clock_in_out','fieldValue' => 'yes','checked' => $attendanceSetting->employee_clock_in_out == 'yes'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Checkbox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['fieldRequired' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e)): ?>
<?php $component = $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e; ?>
<?php unset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e); ?>
<?php endif; ?>
                </div>

                <div class="col-lg-12 mb-2">
                    <?php if (isset($component)) { $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e = $component; } ?>
<?php $component = App\View\Components\Forms\Checkbox::resolve(['fieldLabel' => __('modules.attendance.autoClockIn'),'fieldName' => 'auto_clock_in','fieldId' => 'auto_clock_in','fieldValue' => 'yes','checked' => $attendanceSetting->auto_clock_in == 'yes'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Checkbox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e)): ?>
<?php $component = $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e; ?>
<?php unset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e); ?>
<?php endif; ?>
                </div>

                <div class="col-lg-4 auto_clock_in_location mb-3 <?php if($attendanceSetting->auto_clock_in == 'no'): ?> d-none <?php endif; ?>">
                    <?php if (isset($component)) { $__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381 = $component; } ?>
<?php $component = App\View\Components\Forms\Select::resolve(['fieldLabel' => __('modules.attendance.autoClockInDefualtLocation'),'fieldName' => 'auto_clock_in_location','fieldId' => 'auto_clock_in_location','fieldRequired' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <option value="office" <?php echo e($attendanceSetting->auto_clock_in_location == 'office' ? 'selected' : ''); ?>>
                        <?php echo app('translator')->get('modules.attendance.office'); ?></option>
                    <option value="home" <?php echo e($attendanceSetting->auto_clock_in_location == 'home' ? 'selected' : ''); ?>>
                        <?php echo app('translator')->get('modules.attendance.home'); ?></option>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381)): ?>
<?php $component = $__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381; ?>
<?php unset($__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381); ?>
<?php endif; ?>
                </div>

                <div class="col-lg-12 mb-2">
                    <?php if (isset($component)) { $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e = $component; } ?>
<?php $component = App\View\Components\Forms\Checkbox::resolve(['fieldLabel' => __('modules.attendance.checkForRadius'),'fieldName' => 'radius_check','fieldId' => 'radius_check','fieldValue' => 'yes','checked' => $attendanceSetting->radius_check == 'yes'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Checkbox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['fieldRequired' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e)): ?>
<?php $component = $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e; ?>
<?php unset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e); ?>
<?php endif; ?>
                </div>

                <div class="col-lg-12 <?php if($attendanceSetting->radius_check == 'no'): ?> d-none <?php endif; ?> " id="radiusBox">
                    <?php if (isset($component)) { $__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c = $component; } ?>
<?php $component = App\View\Components\Forms\Number::resolve(['fieldLabel' => __('modules.attendance.radius'),'fieldName' => 'radius','fieldId' => 'radius','fieldValue' => $attendanceSetting->radius] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Number::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-0 mr-lg-2 mr-md-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c)): ?>
<?php $component = $__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c; ?>
<?php unset($__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c); ?>
<?php endif; ?>
                </div>


                <div class="col-lg-12 mb-2">
                    <?php if (isset($component)) { $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e = $component; } ?>
<?php $component = App\View\Components\Forms\Checkbox::resolve(['fieldLabel' => __('modules.attendance.showClockIn'),'fieldName' => 'show_clock_in_button','fieldId' => 'show_clock_in_button','fieldValue' => 'yes','checked' => ($attendanceSetting->show_clock_in_button == 'yes')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Checkbox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['fieldRequired' => 'flase']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e)): ?>
<?php $component = $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e; ?>
<?php unset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e); ?>
<?php endif; ?>
                </div>

                <div class="col-lg-12 mb-1">
                    <?php if (isset($component)) { $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e = $component; } ?>
<?php $component = App\View\Components\Forms\Checkbox::resolve(['fieldLabel' => __('modules.attendance.checkForIp'),'fieldName' => 'ip_check','fieldId' => 'ip_check','fieldValue' => 'yes','checked' => $attendanceSetting->ip_check == 'yes'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Checkbox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['fieldRequired' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e)): ?>
<?php $component = $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e; ?>
<?php unset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e); ?>
<?php endif; ?>
                </div>

                <div class="col-lg-12 <?php if($attendanceSetting->ip_check == 'no'): ?> d-none <?php endif; ?> " id="ipBox">
                    <div id="addMoreBox1" class="row">
                        <?php $__empty_1 = true; $__currentLoopData = $ipAddresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $ipAddress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col-md-5">
                                <div class="form-group" id="occasionBox">
                                    <input class="form-control height-35 f-14" type="text" value="<?php echo e($ipAddress); ?>"
                                        name="ip[<?php echo e($index); ?>]"
                                        placeholder="<?php echo e(__('modules.attendance.ipAddress')); ?>" />
                                    <div id="errorOccasion"></div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="col-md-5">
                                <div class="form-group" id="occasionBox">
                                    <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldLabel' => '','fieldPlaceholder' => __('modules.attendance.ipAddress'),'fieldName' => 'ip[0]','fieldId' => 'ip[0]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div id="errorOccasion"></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-md-1"></div>
                    </div>
                    <div id="insertBefore"></div>
                    <div class="clearfix"></div>
                    <a href="javascript:;" id="plusButton" class="text-capitalize"><i class="f-12 mr-2 fa fa-plus"></i>
                        <?php echo app('translator')->get('app.add'); ?> <?php echo app('translator')->get('modules.attendance.ipAddress'); ?> </a>
                </div>

                <div class="col-lg-12 mb-1">
                    <?php if (isset($component)) { $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e = $component; } ?>
<?php $component = App\View\Components\Forms\Checkbox::resolve(['fieldLabel' => __('modules.attendance.sendMonthlyReport'),'fieldName' => 'monthly_report','fieldId' => 'monthly_report','fieldValue' => '1','checked' => $attendanceSetting->monthly_report] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Checkbox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['fieldRequired' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e)): ?>
<?php $component = $__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e; ?>
<?php unset($__componentOriginaldf5bb0e32b087bca724e42ed3cdc51682b267e1e); ?>
<?php endif; ?>
                </div>

                <div class="col-lg-12 <?php if($attendanceSetting->monthly_report == 0): ?> d-none <?php endif; ?> " id="monthly-report-roles">
                    <?php if (isset($component)) { $__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381 = $component; } ?>
<?php $component = App\View\Components\Forms\Select::resolve(['fieldLabel' => __('modules.attendance.chooseRoleReport'),'fieldName' => 'monthly_report_roles[]','fieldId' => 'monthly_report_roles','fieldRequired' => 'true','multiple' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option 
                            <?php if(is_array($monthlyReportRoles) && in_array($item->id, $monthlyReportRoles)): ?>
                                selected
                            <?php endif; ?>
                            value="<?php echo e($item->id); ?>"><?php echo e($item->display_name); ?></option>                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381)): ?>
<?php $component = $__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381; ?>
<?php unset($__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381); ?>
<?php endif; ?>
                </div>

            </div>
        </div>

        <div class="col-lg-4">
            <?php if (isset($component)) { $__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381 = $component; } ?>
<?php $component = App\View\Components\Forms\Select::resolve(['fieldLabel' => __('modules.attendance.weekStartFrom'),'fieldName' => 'week_start_from','fieldId' => 'week_start_from','fieldRequired' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <option value="0" <?php echo e($attendanceSetting->week_start_from == '0' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('app.sunday'); ?></option>
                <option value="1" <?php echo e($attendanceSetting->week_start_from == '1' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('app.monday'); ?></option>
                <option value="2" <?php echo e($attendanceSetting->week_start_from == '2' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('app.tuesday'); ?></option>
                <option value="3" <?php echo e($attendanceSetting->week_start_from == '3' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('app.wednesday'); ?></option>
                <option value="4" <?php echo e($attendanceSetting->week_start_from == '4' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('app.thursday'); ?></option>
                <option value="5" <?php echo e($attendanceSetting->week_start_from == '5' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('app.friday'); ?></option>
                <option value="6" <?php echo e($attendanceSetting->week_start_from == '6' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('app.saturday'); ?></option>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381)): ?>
<?php $component = $__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381; ?>
<?php unset($__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381); ?>
<?php endif; ?>
        </div>


        <div class="col-lg-4">
            <?php if (isset($component)) { $__componentOriginal93d2aebf32a7d2890ca45f165bd8e854f73d1c5a = $component; } ?>
<?php $component = App\View\Components\Forms\ToggleSwitch::resolve(['checked' => $attendanceSetting->alert_after_status,'fieldLabel' => __('modules.attendance.attendanceReminderStatus'),'fieldName' => 'alert_after_status','fieldId' => 'alert_after_status'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.toggle-switch'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ToggleSwitch::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-0 mr-lg-12']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93d2aebf32a7d2890ca45f165bd8e854f73d1c5a)): ?>
<?php $component = $__componentOriginal93d2aebf32a7d2890ca45f165bd8e854f73d1c5a; ?>
<?php unset($__componentOriginal93d2aebf32a7d2890ca45f165bd8e854f73d1c5a); ?>
<?php endif; ?>
        </div>

        <div class="col-lg-4 alert_after_box <?php if($attendanceSetting->alert_after_status == 0): ?> d-none <?php endif; ?>">
            <?php if (isset($component)) { $__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c = $component; } ?>
<?php $component = App\View\Components\Forms\Number::resolve(['fieldLabel' => __('modules.attendance.ReminderAfterMinutes'),'fieldName' => 'alert_after','fieldId' => 'alert_after','fieldValue' => $attendanceSetting->alert_after,'fieldRequired' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Number::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-0 mr-lg-2 mr-md-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c)): ?>
<?php $component = $__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c; ?>
<?php unset($__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c); ?>
<?php endif; ?>
        </div>
    </div>
</div>
<!-- Buttons Start -->
<div class="w-100 border-top-grey">
    <?php if (isset($component)) { $__componentOriginal698fd7a4bca51a1feab5ec62ef3754628de98690 = $component; } ?>
<?php $component = App\View\Components\SettingFormActions::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('setting-form-actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SettingFormActions::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php if (isset($component)) { $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480 = $component; } ?>
<?php $component = App\View\Components\Forms\ButtonPrimary::resolve(['icon' => 'check'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonPrimary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'save-form','class' => 'mr-3']); ?><?php echo app('translator')->get('app.save'); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480)): ?>
<?php $component = $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480; ?>
<?php unset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal698fd7a4bca51a1feab5ec62ef3754628de98690)): ?>
<?php $component = $__componentOriginal698fd7a4bca51a1feab5ec62ef3754628de98690; ?>
<?php unset($__componentOriginal698fd7a4bca51a1feab5ec62ef3754628de98690); ?>
<?php endif; ?>
</div>
<!-- Buttons End -->

<script>
    $('#ipBox').on('click', '.delete-ip-field', function() {
        var ipIndex = $(this).data('ip-index');
        $('#addMoreBox' + ipIndex).remove();
    });
    var $insertBefore = $('#insertBefore');
    var $i = <?php echo e(count($ipAddresses)); ?>;

    $('#save-form').click(function() {
        $.easyAjax({
            url: "<?php echo e(route('attendance-settings.update', $attendanceSetting->id)); ?>",
            container: '#editSettings',
            disableButton: true,
            blockUI: true,
            buttonSelector: "#save-form",
            type: "POST",
            redirect: true,
            data: $('#editSettings').serialize()
        })
    });

    $('#employee_clock_in_out').click(function() {
        if ($(this).prop("checked") == true) {
            $('#radius_check').removeAttr("disabled");
            $('#ip_check').removeAttr("disabled");
        } else if ($(this).prop("checked") == false) {
            if ($('#radius_check').prop("checked") == true) {
                $('#radius_check').trigger('click');
            }
            if ($('#ip_check').prop("checked") == true) {
                $('#ip_check').trigger('click');
            }

            $('#radius_check').attr("disabled", 'disabled');
            $('#ip_check').attr("disabled", 'disabled');
        }
    });

    $('#radius_check').click(function() {
        $('#radiusBox').toggleClass('d-none');
    });

    $('#ip_check').click(function() {
        $('#ipBox').toggleClass('d-none');
    });

    $('#monthly_report').click(function() {
        $('#monthly-report-roles').toggleClass('d-none');
    });

    // Add More Inputs
    $('#plusButton').click(function() {
        $i = $i + 1;
        var indexs = $i + 1;
        $(`<div id="addMoreBox${indexs}" class="row clearfix"><div class="col-md-5"><div class="form-group"><input class="form-control height-35 f-14" name="ip[${$i}]" type="text" value="" placeholder="<?php echo app('translator')->get('modules.attendance.ipAddress'); ?>"/></div></div><div class="col-md-1"><div class="task_view mt-1"> <a href="javascript:;" data-ip-index="${indexs}" class="delete-ip-field task_view_more d-flex align-items-center justify-content-center dropdown-toggle" > <i class="fa fa-trash icons mr-2"></i> <?php echo app('translator')->get('app.delete'); ?></a> </div></div></div>`)
            .insertBefore($insertBefore);
    });

    // Remove fields
    function removeBox(index) {
        $('#addMoreBox' + index).remove();
    }


    $('#alert_after_status').click(function() {
        $('.alert_after_box').toggleClass('d-none');
    })

    $('#auto_clock_in').click(function() {
        $('.auto_clock_in_location').toggleClass('d-none');
    })
</script>
<?php /**PATH /var/www/HEPL_PM/resources/views/attendance-settings/ajax/attendance.blade.php ENDPATH**/ ?>