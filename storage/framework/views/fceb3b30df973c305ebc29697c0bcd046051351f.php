
<?php $__env->startSection('content'); ?>
    <div class="col-md-6 mx-auto">
         <h3 class="mx-auto text-center">You are almost there!</h3>
        <p class="mx-auto text-center">Provide as much Details & Pictures as possible and set right Price!</p>
        <p>
            <span class="text-muted"><?php echo e($listing->category_name); ?></span> ><span
                class="text-muted"><?php echo e($listing->subcategory_name); ?></span>
        </p>
    </div>
    <form class="place-ad-form" enctype="multipart/form-data">
        <input name="listing_id" type="hidden" value="<?php echo e($listing->id); ?>">
        <input type='hidden' class='form-control latitude' id='latitude' name='latitude' placeholder='Enter Latitude'>
        <input type='hidden' class='form-control longitude' id='longitude' name='longitude'
               placeholder='Enter Longitude'>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <input type="text" class="form-controlz" name="title" value="<?php echo e($listing->title); ?>" placeholder="Title"
                   style="padding:22px;" required>
            <div class="invalid-feedback">
                Please provide a title.
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-controlz" name="price" placeholder="Price" style="padding:22px;"
                           required>
                    <div class="invalid-feedback">
                        Please provide a valid price.
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-controlz" name="manufactured_year" placeholder="Manufactured Year" style="padding:22px;" required>
                    <div class="invalid-feedback">
                        Please provide a valid Manufactured Year.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-controlz" name="condition" required>
                        <option selected disabled>Condition</option>
                        <option value="Perfect inside and out">Perfect inside and out</option>
                        <option value="Almost no noticeable problems or flaws">Almost no noticeable problems or flaws</option>
                        <option value="A bit of wear and tear, but in good working condition">A bit of wear and tear, but in good working condition</option>
                        <option value="Normal wear and tear for the age of the item, a few problems here and there">Normal wear and tear for the age of the item, a few problems here and there</option>
                        <option value="Above average wear and tear. The item may need a bit of repair to work properly">Above average wear and tear. The item may need a bit of repair to work properly</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-controlz" name="usage" required>
                        <option selected disabled>Usage</option>
                        <option value="Still in Original packing">Still in Original packing</option>
                        <option value="Out of original packaging, but only used once">Out of original packaging, but only used once</option>
                        <option value="Used only a few times">Used only a few times</option>
                        <option value="Used an average amount, as frequently as would be expected">Used an average amount, as frequently as would be expected</option>
                        <option value="Used an above average amount since purchased">Used an above average amount since purchased</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-6">
                <input type="text" class="form-controlz" name="stock_level" placeholder="Stock Level" style="padding:22px;"
                           required>
                    <div class="invalid-feedback">
                        Please provide a valid stock level.
                    </div>
                   
                         
                </div>
                <div class="col-md-6">
                    <select class="form-controlz" name="stock_unit" required>
                        <option selected disabled>Stock Unit</option>
                        <option value="pcs">Pcs</option>
                        <option value="kg">Kg</option>
                        <option value="ton">Tons</option>
                        <option value="ltr">Ltr</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-controlz" name="source" required>
                        <option selected disabled>Source</option>
                        <option value="Manufacturer">Manufacturer</option>
                        <option value="Distributor">Distributor</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-controlz" name="trade" required>
                        <option selected disabled>Trade</option>
                        <option value="Worlwide">Worlwide</option>
                        <option value="Inside Country">Inside Country</option>
                        <option value="Within Region">Within Region</option>
                    </select>
                </div>
            </div>
        </div>
           <div class="col-md-6 mx-auto" style="margin-top: 20px;">
           <input type="tel" class="form-controlz" name="phone" placeholder="Mobile" style="padding:22px;"
                           pattern="[0-9]{10}" title="Please enter a valid 10-digit Mobile number" required>
                    <div class="invalid-feedback">
                        Please provide a valid 10-digit Mobile number.
                    </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <textarea name="description" class="form-controlz" placeholder="Description" style="height: 200px;"
                      required></textarea>
            <div class="invalid-feedback">
                Please provide a description.
            </div>
        </div>

        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="input--file">
                <i class="fa fa-camera fa-1x"></i>
                <input type="file" multiple class="form-controlz form-control-file images" name="images[]"
                       placeholder="Upload Images">
                <div class="invalid-feedback image-error">
                    Please upload at least one image.
                </div>
                <span><b>Add Photos</b></span>
            </div>
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;">
            <div id="image-display-div" class="row "></div>
        </div>

        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="input--file">
                <i class="fa fa-camera fa-1x"></i>
                <input type="file" multiple class="form-controlz form-control-file documents" name="documents[]"
                       placeholder="Upload Documents">
                <div class="invalid-feedback image-error">
                    Invalid
                </div>
                <span><b>Add File</b></span>
            </div>
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;margin-bottom: 10px;">
            <div id="document-display-div" class="row "></div>
        </div>
   
        <div class="col-md-6 mx-auto">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-controlz country" name="country" placeholder="Select Country" required>
                        <option disabled selected>Select Country</option>
                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($country->id); ?>"><?php echo e($country->nice_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="invalid-feedback">
                        Please select a country.
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="form-controlz city" name="city" placeholder="Select City" required>
                        <option selected disabled>Select city</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a city.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <input type="text" class="form-controlz location_name" name="location_name" placeholder="Location Type"
                   style="padding:22px;" required>
            <div class="invalid-feedback">
                Please provide a location.
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="map" id="map"></div>
        </div>
        <div class="col-md-6 mx-auto text-center btn-nexts" style="margin-top: 20px;">
        <a class="btn place-ad-form-submit">Next</a>
        </div>
    </form>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_scripts'); ?>
    <script type="text/javascript"> map_key = "<?php echo e(env('GOOGLE_MAP_KEY')); ?>"; </script>
    <script type="text/javascript" src="<?php echo e(asset('js/listings_form.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('listing-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/listings/export_import_trade_details.blade.php ENDPATH**/ ?>