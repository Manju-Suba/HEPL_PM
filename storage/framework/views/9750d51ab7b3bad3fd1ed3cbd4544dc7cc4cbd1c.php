<style>
    /* Set the size of the div element that contains the map */
    #map {
        height: 300px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }

    #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
    }

    #infowindow-content .title {
        font-weight: bold;
    }

    #infowindow-content {
        display: none;
    }

    #map #infowindow-content {
        display: inline;
    }

    .pac-card {
        background-color: #fff;
        border: 0;
        border-radius: 2px;
        box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
        margin: 10px;
        padding: 0 0.5em;
        font: 400 18px Roboto, Arial, sans-serif;
        overflow: hidden;
        font-family: Roboto;
        padding: 0;
    }

    #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
    }

    .pac-container {
        background-color: #FFF;
        z-index: 20;
        position: fixed;
        display: inline-block;
        float: left;
    }

    .modal {
        z-index: 20;
    }

    .modal-backdrop {
        z-index: 10;
    }

    ​
    .pac-controls {
        display: inline-block;
        padding: 5px 11px;
    }

    .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }

    #pac-input {
        background-color: #fff;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
    }

    #pac-input:focus {
        border-color: #4d90fe;
    }

    #title {
        font-size: 18px;
        font-weight: 500;
        padding: 10px 12px;
    }

</style>

<div class="modal-header">
    <h5 class="modal-title"><?php echo app('translator')->get('app.addNew'); ?> <?php echo app('translator')->get('app.address'); ?></h5>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<?php if (isset($component)) { $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6 = $component; } ?>
<?php $component = App\View\Components\Form::resolve(['method' => 'POST'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'createAddress','class' => 'ajax-form']); ?>
    <div class="modal-body">
        <div class="portlet-body">
            <div class="row">

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldLabel' => __('app.location'),'fieldPlaceholder' => __('placeholders.city'),'fieldName' => 'location','fieldId' => 'location','fieldRequired' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldLabel' => __('modules.invoices.taxName'),'fieldPlaceholder' => __('modules.invoices.taxName'),'fieldName' => 'tax_name','fieldId' => 'tax_name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldLabel' => __('modules.invoices.tax'),'fieldPlaceholder' => __('placeholders.invoices.gstNumber'),'fieldName' => 'tax_number','fieldId' => 'tax_number'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                <div class="col-sm-12">
                    <?php if (isset($component)) { $__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11 = $component; } ?>
<?php $component = App\View\Components\Forms\Textarea::resolve(['fieldLabel' => __('app.address'),'fieldPlaceholder' => __('placeholders.address'),'fieldName' => 'address','fieldId' => 'address','fieldRequired' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                <?php if(!is_null(global_setting()->google_map_key)): ?>
                    <div class="col-md-6">
                        <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldLabel' => __('modules.accountSettings.latitude'),'fieldPlaceholder' => 'e.g. 38.895','fieldName' => 'latitude','fieldId' => 'latitude'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                    <div class="col-md-6">
                        <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldLabel' => __('modules.accountSettings.longitude'),'fieldPlaceholder' => 'e.g. -77.0364','fieldName' => 'longitude','fieldId' => 'longitude'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                    <div class="col-lg-12">
                        <h4 class="f-16 font-weight-500 text-capitalize">
                            <?php echo app('translator')->get('modules.accountSettings.businessMapLocation'); ?></h4>

                        <div class="pac-card" id="pac-card">
                            <div>
                                <div id="title"><?php echo app('translator')->get('modules.accountSettings.autocompleteSearch'); ?></div>
                                <div id="type-selector" class="pac-controls d-none">
                                    <input type="radio" name="type" id="changetype-all" checked="checked"/>
                                    <label for="changetype-all">All</label>

                                    <input type="radio" name="type" id="changetype-establishment"/>
                                    <label for="changetype-establishment">establishment</label>

                                    <input type="radio" name="type" id="changetype-address"/>
                                    <label for="changetype-address">address</label>

                                    <input type="radio" name="type" id="changetype-geocode"/>
                                    <label for="changetype-geocode">geocode</label>

                                    <input type="radio" name="type" id="changetype-cities"/>
                                    <label for="changetype-cities">(cities)</label>

                                    <input type="radio" name="type" id="changetype-regions"/>
                                    <label for="changetype-regions">(regions)</label>
                                </div>
                                <br/>
                                <div id="strict-bounds-selector" class="pac-controls d-none">
                                    <input type="checkbox" id="use-location-bias" value="" checked/>
                                    <label for="use-location-bias">Bias to map viewport</label>

                                    <input type="checkbox" id="use-strict-bounds" value=""/>
                                    <label for="use-strict-bounds">Strict bounds</label>
                                </div>
                            </div>
                            <div id="pac-container">
                                <input id="pac-input" type="text" placeholder="<?php echo app('translator')->get('placeholders.location'); ?>"/>
                            </div>
                        </div>

                        <div id="infowindow-content">
                            <span id="place-name" class="title"></span><br/>
                            <span id="place-address"></span>
                        </div>

                        <div id="map" class="border rounded"></div>

                    </div>
                <?php else: ?>
                    <div class="col-md-12">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'secondary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'secondary']); ?>
                            <span class="text-center">
                                <?php echo app('translator')->get('messages.googleMapMessage'); ?> <a
                                    href="<?php echo e(route('app-settings.index')); ?>?tab=google-map-setting"><?php echo app('translator')->get('app.googleMapSettings'); ?></a>
                            </span>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <?php if (isset($component)) { $__componentOriginaldffecccc219bb81c1548bfa6ec1531014cb3bec8 = $component; } ?>
<?php $component = App\View\Components\Forms\ButtonCancel::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-cancel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonCancel::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-dismiss' => 'modal','class' => 'border-0 mr-3']); ?><?php echo app('translator')->get('app.cancel'); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['id' => 'save-address-setting']); ?><?php echo app('translator')->get('app.save'); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480)): ?>
<?php $component = $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480; ?>
<?php unset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480); ?>
<?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6)): ?>
<?php $component = $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6; ?>
<?php unset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6); ?>
<?php endif; ?>

<script>
    $('#save-address-setting').click(function () {
        $.easyAjax({
            container: '#createAddress',
            type: "POST",
            disableButton: true,
            blockUI: true,
            buttonSelector: "#save-address-setting",
            url: "<?php echo e(route('business-address.store')); ?>",
            data: $('#createAddress').serialize(),
            success: function (response) {
                if (response.status == 'success') {
                    window.location.reload();
                }
            }
        })
    });
</script>
<?php if(!is_null(global_setting()->google_map_key)): ?>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(global_setting()->google_map_key); ?>&callback=initMap&libraries=places&v=weekly"
        async>
    </script>

    <script>
        var myLatLng = {
            lat: parseFloat(company.latitude),
            lng: parseFloat(company.longitude)
        };

        function initMap() {
            let map = new google.maps.Map(document.getElementById("map"), {
                center: myLatLng,
                zoom: 17,
                mapTypeControl: false
            });

            let card = document.getElementById("pac-card");
            let pacinput = document.getElementById("pac-input");
            pacinput.classList.add("form-control", "height-35", "f-14");

            let biasInputElement = document.getElementById("use-location-bias");
            let strictBoundsInputElement = document.getElementById("use-strict-bounds");
            let options = {
                fields: ["formatted_address", "geometry", "name"],
                strictBounds: false,
                types: ["establishment"],
            };

            map.controls[google.maps.ControlPosition.TOP_LEFT].push(card);

            let autocomplete = new google.maps.places.Autocomplete(pacinput, options);

            // Bind the map's bounds (viewport) property to the autocomplete object,
            // so that the autocomplete requests use the current map bounds for the
            // bounds option in the request.
            autocomplete.bindTo("bounds", map);

            let infowindow = new google.maps.InfoWindow();
            let infowindowContent = document.getElementById("infowindow-content");

            infowindow.setContent(infowindowContent);

            let marker = new google.maps.Marker({
                map,
                anchorPoint: new google.maps.Point(0, -29),
                position: myLatLng,
                Draggable: true
            });

            marker.addListener('drag', handleEvent);
            marker.addListener('dragend', handleEvent);

            autocomplete.addListener("place_changed", () => {
                infowindow.close();
                marker.setVisible(false);

                let place = autocomplete.getPlace();

                if (!place.geometry || !place.geometry.location) {
                    // User entered the name of a Place that was not suggested and
                    // pressed the Enter key, or the Place Details request failed.
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }

                $('#latitude').val(place.geometry.location.lat());
                $('#longitude').val(place.geometry.location.lng());

                marker.setPosition(place.geometry.location);
                marker.setVisible(true);
                infowindowContent.children["place-name"].textContent = place.name;
                infowindowContent.children["place-address"].textContent =
                    place.formatted_address;
                infowindow.open(map, marker);
            });

            // Sets a listener on a radio button to change the filter type on Places
            // Autocomplete.
            function setupClickListener(id, types) {
                let radioButton = document.getElementById(id);

                radioButton.addEventListener("click", () => {
                    autocomplete.setTypes(types);
                    input.value = "";
                });
            }

            function handleEvent(event) {
                document.getElementById('latitude').value = event.latLng.lat();
                document.getElementById('longitude').value = event.latLng.lng();
            }

            setupClickListener("changetype-all", []);
            setupClickListener("changetype-address", ["address"]);
            setupClickListener("changetype-establishment", ["establishment"]);
            setupClickListener("changetype-geocode", ["geocode"]);
            setupClickListener("changetype-cities", ["(cities)"]);
            setupClickListener("changetype-regions", ["(regions)"]);
            biasInputElement.addEventListener("change", () => {
                if (biasInputElement.checked) {
                    autocomplete.bindTo("bounds", map);
                } else {
                    // User wants to turn off location bias, so three things need to happen:
                    // 1. Unbind from map
                    // 2. Reset the bounds to whole world
                    // 3. Uncheck the strict bounds checkbox UI (which also disables strict bounds)
                    autocomplete.unbind("bounds");
                    autocomplete.setBounds({
                        east: 180,
                        west: -180,
                        north: 90,
                        south: -90
                    });
                    strictBoundsInputElement.checked = biasInputElement.checked;
                }

                input.value = "";
            });
            strictBoundsInputElement.addEventListener("change", () => {
                autocomplete.setOptions({
                    strictBounds: strictBoundsInputElement.checked,
                });
                if (strictBoundsInputElement.checked) {
                    biasInputElement.checked = strictBoundsInputElement.checked;
                    autocomplete.bindTo("bounds", map);
                }

                input.value = "";
            });
        }
    </script>
<?php endif; ?>

<?php /**PATH /var/www/HEPL_PM/resources/views/company-address/create.blade.php ENDPATH**/ ?>