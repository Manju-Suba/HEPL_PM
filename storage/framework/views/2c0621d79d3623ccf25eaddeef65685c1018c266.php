<div class="modal-header">
    <h5 class="modal-title" id="modelHeading"><?php echo app('translator')->get('modules.currencySettings.addNewCurrency'); ?></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
    <?php if (isset($component)) { $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6 = $component; } ?>
<?php $component = App\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'addCurrency']); ?>

        
        <div class="row">
            <div class="col-sm-12" id="alert">
            </div>
        </div>
        <div class="row">

            <div class=" col-sm-12 col-lg-4">
                <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldLabel' => __('modules.currencySettings.currencyName'),'fieldPlaceholder' => __('placeholders.currency.currencyName'),'fieldName' => 'currency_name','fieldId' => 'currency_name','fieldRequired' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Text::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-0 mr-lg-2 mr-md-2']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab)): ?>
<?php $component = $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab; ?>
<?php unset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab); ?>
<?php endif; ?>
            </div>

            <div class="col-sm-12 col-lg-4">
                <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldLabel' => __('modules.currencySettings.currencySymbol'),'fieldPlaceholder' => __('placeholders.currency.currencySymbol'),'fieldName' => 'currency_symbol','fieldId' => 'currency_symbol','fieldRequired' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Text::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-0 mr-lg-2 mr-md-2']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab)): ?>
<?php $component = $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab; ?>
<?php unset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab); ?>
<?php endif; ?>
            </div>

            <div class="col-sm-12 col-lg-4">
                <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldLabel' => __('modules.currencySettings.currencyCode'),'fieldPlaceholder' => __('placeholders.currency.currencyCode'),'fieldName' => 'currency_code','fieldId' => 'currency_code','fieldRequired' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Text::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-0 mr-lg-2 mr-md-2']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab)): ?>
<?php $component = $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab; ?>
<?php unset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab); ?>
<?php endif; ?>
            </div>

            <div class="col-sm-12 col-lg-4">
                <div class="form-group my-3">
                    <label class="f-14 text-dark-grey mb-12 w-100"
                           for="usr"><?php echo app('translator')->get('modules.currencySettings.isCryptoCurrency'); ?></label>
                    <div class="d-flex">
                        <?php if (isset($component)) { $__componentOriginald8738d15765d6b35d603018b407a63f14ee18785 = $component; } ?>
<?php $component = App\View\Components\Forms\Radio::resolve(['fieldId' => 'crypto_currency_yes','fieldLabel' => __('app.yes'),'fieldName' => 'is_cryptocurrency','fieldValue' => 'yes'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <?php if (isset($component)) { $__componentOriginald8738d15765d6b35d603018b407a63f14ee18785 = $component; } ?>
<?php $component = App\View\Components\Forms\Radio::resolve(['fieldId' => 'crypto_currency_no','fieldLabel' => __('app.no'),'fieldValue' => 'no','fieldName' => 'is_cryptocurrency','checked' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-4 crypto-currency" style="display: none">
                <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldLabel' => __('modules.currencySettings.usdPrice'),'fieldPlaceholder' => __('placeholders.price'),'fieldName' => 'usd_price','fieldId' => 'usd_price','fieldRequired' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Text::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-0 mr-lg-2 mr-md-2']); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab)): ?>
<?php $component = $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab; ?>
<?php unset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab); ?>
<?php endif; ?>
            </div>

            <div class="col-sm-12 col-lg-6 regular-currency">
                <?php if (isset($component)) { $__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c = $component; } ?>
<?php $component = App\View\Components\Forms\Number::resolve(['fieldLabel' => __('modules.currencySettings.exchangeRate'),'fieldPlaceholder' => __('placeholders.price'),'fieldName' => 'exchange_rate','fieldId' => 'exchange_rate','fieldRequired' => 'true','fieldHelp' => '( '.e(company()->currency->currency_code).' '.e(__('app.to')).' '.e(company()->currency->currency_code).' )'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                <?php if(global_setting()->currency_converter_key !==''): ?>
                    <a href="javascript:;" class="fetch-exchange-rate" icon="key"><i class="fa fa-key"></i>
                        <?php echo app('translator')->get('modules.currencySettings.fetchLatestExchangeRate'); ?>
                    </a>
                <?php else: ?>
                    <?php echo app('translator')->get('messages.configureCurrencyConverterKey',['link'=> '<a href="javascript:;" class="fetch-exchange-rate" icon="key"><i class="fa fa-key"></i> '.ucwords(__("app.clickHere")).'</a>']); ?>
                <?php endif; ?>
            </div>

        </div>
        <div class="col-12 p-0 mt-4">
            <h5 class="mb-0 pt-3 text-capitalize border-top-grey"><?php echo app('translator')->get('modules.accountSettings.currencyFormatSetting'); ?></h5>
        </div>
        <div class="row pt-3">
            <div class="col-lg-6">
                <?php if (isset($component)) { $__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381 = $component; } ?>
<?php $component = App\View\Components\Forms\Select::resolve(['fieldId' => 'currency_position','fieldLabel' => __('modules.currencySettings.currencyPosition'),'fieldName' => 'currency_position','popover' => __('messages.currency.currencyPosition')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <option
                        <?php if($currencyFormatSetting->currency_position == 'left'): ?> selected <?php endif; ?>
                    value="left"><?php echo app('translator')->get('modules.currencySettings.left'); ?></option>
                    <option <?php if($currencyFormatSetting->currency_position == 'right'): ?> selected
                            <?php endif; ?> value="right"><?php echo app('translator')->get('modules.currencySettings.right'); ?></option>
                    <option <?php if($currencyFormatSetting->currency_position == 'left_with_space'): ?> selected
                            <?php endif; ?> value="left_with_space"><?php echo app('translator')->get('modules.currencySettings.leftWithSpace'); ?></option>
                    <option <?php if($currencyFormatSetting->currency_position == 'right_with_space'): ?> selected
                            <?php endif; ?> value="right_with_space"><?php echo app('translator')->get('modules.currencySettings.rightWithSpace'); ?></option>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381)): ?>
<?php $component = $__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381; ?>
<?php unset($__componentOriginalaa9e2e00dcec6b58db49b9128f7191370bc93381); ?>
<?php endif; ?>
            </div>
            <div class="col-lg-6">
                <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldLabel' => __('modules.currencySettings.thousandSeparator'),'fieldPlaceholder' => __('placeholders.currency.thousandSeparator'),'fieldName' => 'thousand_separator','fieldId' => 'thousand_separator','popover' => __('messages.currency.thousandSeparator'),'fieldValue' => $currencyFormatSetting->thousand_separator] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Text::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-0 mr-lg-2 mr-md-2']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab)): ?>
<?php $component = $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab; ?>
<?php unset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab); ?>
<?php endif; ?>
            </div>
            <div class="col-lg-6">
                <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldLabel' => __('modules.currencySettings.decimalSeparator'),'fieldPlaceholder' => __('placeholders.currency.decimalSeparator'),'fieldName' => 'decimal_separator','fieldId' => 'decimal_separator','popover' => __('messages.currency.decimalSeparator'),'fieldValue' => $currencyFormatSetting->decimal_separator] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Text::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-0 mr-lg-2 mr-md-2']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab)): ?>
<?php $component = $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab; ?>
<?php unset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab); ?>
<?php endif; ?>
            </div>
            <div class="col-lg-6">
                <?php if (isset($component)) { $__componentOriginal9cc635f9ffa1f2f42c8f27975e194fec79eaad2c = $component; } ?>
<?php $component = App\View\Components\Forms\Number::resolve(['fieldLabel' => __('modules.accountSettings.numberOfdecimals'),'fieldName' => 'no_of_decimal','fieldId' => 'no_of_decimal','popover' => __('messages.currency.numberOfdecimals'),'fieldValue' => $currencyFormatSetting->no_of_decimal] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6)): ?>
<?php $component = $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6; ?>
<?php unset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6); ?>
<?php endif; ?>

    <div class="col-12 p-0 mt-4">
        <p class="ntfcn-tab-content-left w-100 pt-3 px-1 border-top-grey"><?php echo app('translator')->get('modules.currencySettings.sample'); ?> - <span id="formatted_currency"><?php echo e($defaultFormattedCurrency); ?></span>
        </p>
    </div>
</div>
<!-- SETTINGS END -->

<div class="modal-footer">
    <?php if (isset($component)) { $__componentOriginaldffecccc219bb81c1548bfa6ec1531014cb3bec8 = $component; } ?>
<?php $component = App\View\Components\Forms\ButtonCancel::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-cancel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonCancel::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-dismiss' => 'modal','class' => 'border-0']); ?><?php echo app('translator')->get('app.cancel'); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldffecccc219bb81c1548bfa6ec1531014cb3bec8)): ?>
<?php $component = $__componentOriginaldffecccc219bb81c1548bfa6ec1531014cb3bec8; ?>
<?php unset($__componentOriginaldffecccc219bb81c1548bfa6ec1531014cb3bec8); ?>
<?php endif; ?>
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
</div>

<script>
    $(".select-picker").selectpicker();

    $(document).ready(function () {

        // Toggle between Usd Price field
        $("input[name=is_cryptocurrency]").click(function () {
            if ($(this).val() == 'yes') {
                $('.regular-currency').hide();
                $('.crypto-currency').show();
            } else {
                $('.crypto-currency').hide();
                $('.regular-currency').show();
            }
        })

        // Save form data
        $('#save-form').click(function () {
            $.easyAjax({
                url: "<?php echo e(route('currency-settings.store')); ?>",
                container: '#addCurrency',
                type: "POST",
                blockUI: true,
                redirect: true,
                disableButton: true,
                buttonSelector: "#save-form",
                data: $('#addCurrency').serialize(),
                success: function (response) {
                    if (response.status == 'success') {
                        window.location.reload();
                    }
                }
            })
        });

        $('.fetch-exchange-rate').click(function () {

            let currencyConverterKey = '<?php echo e(global_setting()->currency_converter_key); ?>';

            if (currencyConverterKey === "") {
                addCurrencyExchangeKey();
                return false;
            }

            let currencyCode = $('#currency_code').val();
            let url = "<?php echo e(route('currency_settings.exchange_rate', '#cc')); ?>";
            url = url.replace('#cc', currencyCode);

            $.easyAjax({
                url: url,
                type: "GET",
                data: {
                    currencyCode: currencyCode
                },
                disableButton: true,
                blockUI: true,
                messagePosition: 'inline',
                success: function (response) {
                    $('#exchange_rate').val(response);
                }
            })
        });

        function addCurrencyExchangeKey() {
            const url = "<?php echo e(route('currency_settings.exchange_key')); ?>";
            $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
            $.ajaxModal(MODAL_LG, url);
        }

        $("body").on("change keyup",  "#currency_symbol, #currency_code, #currency_position, #thousand_separator, #decimal_separator, #no_of_decimal", function () {
            let number = 1234567.89;
            let no_of_decimal = $('#no_of_decimal').val();
            let thousand_separator = $('#thousand_separator').val();
            let currency_position = $('#currency_position').val();
            let decimal_separator = $('#decimal_separator').val();
            var companyCurrencyName = "<?php echo e(company()->currency->currency_code); ?>";

           
            var currentCurrencyName = $('#currency_code').val();

            if(currentCurrencyName == ''){
                $('#exchange_rateHelp').html('( '+companyCurrencyName+' <?php echo app('translator')->get('app.to'); ?> '+companyCurrencyName+' )');
            }
            else {
                $('#exchange_rateHelp').html('( '+companyCurrencyName+' <?php echo app('translator')->get('app.to'); ?> '+currentCurrencyName+' )');
            }

            let formatted_currency = number_format(number, no_of_decimal, decimal_separator, thousand_separator, currency_position);
            $('#formatted_currency').html(formatted_currency);
        });

        function number_format(number, decimals, dec_point, thousands_sep, currency_position) {

            // Strip all characters but numerical ones.
            number = (number + '').replace(/[^0-9+\-Ee.]/g, '');

            var currency_symbol = $('#currency_symbol').val();

            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function (n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }

            // number = dec_point == '' ? s[0] : s.join(dec);

            number = s.join(dec);

            switch (currency_position) {
                case 'left':
                    number = currency_symbol + number;
                    break;
                case 'right':
                    number = number + currency_symbol;
                    break;
                case 'left_with_space':
                    number = currency_symbol + ' ' + number;
                    break;
                case 'right_with_space':
                    number = number + ' ' + currency_symbol;
                    break;
                default:
                    number = currency_symbol + number;
                    break;
            }
            return number;
        }

        init('#addCurrency');

    });


</script>
<?php /**PATH /var/www/HEPL_PM/resources/views/currency-settings/create.blade.php ENDPATH**/ ?>