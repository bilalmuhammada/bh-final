
<?php $__env->startSection('content'); ?>
    <form class="listing-title-form">
        <input name="category_id" type="hidden" value="<?php echo e($category_id); ?>">
        <input name="subcategory_id" type="hidden" value="<?php echo e($subcategory_id); ?>">
        <div class="col-md-4 mx-auto text-center">
            <h5 style="font-size: 25px;font-weight:bold;">
                Enter a short title to describe your <br/> listing
            </h5>
            <p>Make your title informative and attractive</p>
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;">
            <input type="text" class="form-controlz" name="title" placeholder="e.g. Business for Sale"
                   style="text-align: center;height:45px;" >
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;text-align:center;">
            <a class="btn listing-title-form-submit">
                <b>Let's go!</b>
            </a>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_scripts'); ?>
    <script type="text/javascript">
        $(document).on('click', '.listing-title-form-submit', function (e) {
            e.preventDefault();
            var formData = new FormData($('.listing-title-form')[0]);

            $.ajax({
                url: api_url + 'listing/save-listing-title',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {

                        setTimeout(function () {
                            window.location.assign(`${base_url}listing/place-ad/${response.listing_id}`);
                        }, 600);

                    } else {
                        alert(response.message);
                    }
                },
                error: function (response) {
                    showAlert("error", "Server Error");
                }
            });
        });
    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('listing-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/listings/listing-title.blade.php ENDPATH**/ ?>