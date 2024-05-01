<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<?php echo $__env->make("layout.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--end::Head-->
<!--begin::Body-->
<body style="overflow-x: hidden;">
<?php echo $__env->make("layout.topbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<!-- modals start -->
<?php echo $__env->make('modals.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('modals.forgot-password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('modals.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('modals.report', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('modals.phone-request', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('modals.document-request', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- modals end -->
<!-- footer area start -->
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- footer area end -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(env('GOOGLE_RECAPTCHA_KEY')); ?>"></script>

<script src="<?php echo e(asset('slick/slick.js?v2022')); ?>" type="text/javascript " charset="utf-8 "></script>

<script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.7.1/slick/slick.js'></script>

<script type="text/javascript ">
    const api_url = "<?php echo e(env('API_URL')); ?>";
    const base_url = "<?php echo e(env('BASE_URL')); ?>";
    const public_url = "<?php echo e(asset('/')); ?>";
    var token = localStorage.getItem("user_token");

    console.log(token);

    if (token == '' || token == undefined || token == null || token == 'null') {
        <?php if(session()->has('user')): ?>
        localStorage.setItem('user_token', "<?php echo e(session()->get('user_token')); ?>");
        <?php endif; ?>
        //window.location.assign = base_url + 'home' + "<?php echo e('?country=' . request()->country . '&city=' . request()->city); ?>";
    }
    const GOOGLE_RECAPTCHA_KEY = "<?php echo e(env('GOOGLE_RECAPTCHA_KEY')); ?>";

    function ajax_setup() {
        $.ajaxSetup({
            headers: {
                'Authorization': 'Bearer ' + token ?? "",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            dataType: 'json',
        });
    }

    function checkIfUserLoggedIn() {
        <?php if(session()->has('user')): ?>
            return true;
        <?php else: ?>
            return false;
        <?php endif; ?>
    }


    $(document).ready(function () {
        ajax_setup();
    });
</script>
<!-- Lobibox -->
<script src="<?php echo e(asset('asset/Lobibox/js/lobibox.js')); ?>"></script>

<!----------counter------>
<!-- jquery -->
<script src="<?php echo e(asset('des/js/core.min.js')); ?>"></script>
<!-- custom scripts -->
<script src="<?php echo e(asset('des/js/main.js')); ?>"></script>
<!---------counter------->

<script src="<?php echo e(asset('js/authenticate.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('js/slick.js')); ?>"></script>
<script src="<?php echo e(asset('js/alerts.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('select2/js/select2.min.js')); ?>" type="text/javascript " charset="utf-8 "></script>
<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key=<?php echo e(env('GOOGLE_MAP_KEY')); ?>&libraries=places"></script>



<script>
    //countries dropdown
    $(document).ready(function () {
        function formatCountry(country) {
            if (!country.id) {
                return country.text;
            }

            var flagUrl = $(country.element).data('flag-url'); // Access the flag-url data attribute

            var $country = $(
                '<span><img src="' + flagUrl + '" class="img-flag" /> ' + country.text + '</span>'
            );
            return $country;
        };

        $(".country_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
            minimumResultsForSearch: -1
        });

        function formatCity(city) {
            if (!city.id) {
                return city.text;
            }

            var city_id = $(city.element).data('city-id'); // Access the custom data attribute
            var country_id = "<?php echo e(!empty(request()->country) ? request()->country : ''); ?>";

            var $city = $(
                '<a href="' + base_url + 'home?country=' + country_id + '&city=' + city_id + '" style="color:inherit;"><span class="spanz">' + city.text + '</span></a>'
            );
            return $city;
        };

        //cities dropdown
        $(".city_dropdown").select2({
            // templateSelection: formatCity,
            // templateResult: formatCity,
        });

        $(".city_dropdown_register_form").select2();

    });

    $(document).on('change', '.city_dropdown', function () {
        window.location.assign(base_url + 'home/?country=' + <?php echo e(request()->country); ?> + '&city=' + $(this).val());
    });

    $(document).on('change', '.country_dropdown', function () {
        window.location.assign(base_url + 'home/?country=' + $(this).val());
    });
</script>
<?php echo $__env->yieldContent('page_scripts'); ?>
</body>

</html>
<?php echo $__env->make('modals.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/layout/master.blade.php ENDPATH**/ ?>